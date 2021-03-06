<?php

namespace AppBundle\Command;

use Guzzle\Common\Exception\ExceptionCollection;
use GuzzleHttp\Client;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class FetchGithubStarsCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('app:fetch_github_stars_command')
            ->setDescription('Hello PhpStorm')
            ->addOption(
                'test',
                null,
                InputOption::VALUE_NONE,
                'If set, the task will not write anything to db'
            );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $host = $this->getContainer()->getParameter('host');
        $username = $this->getContainer()->getParameter('username');
        $password = $this->getContainer()->getParameter('password');
        $now = new \DateTime();
        $ISO8601 = 'Y-m-d\TH:i:sP';
        $auth = [$username, $password];

        $client = new Client();
        $response = $client->get($host.'/watched_repositories?_format=json', ['auth' => $auth]);
        $repositories = json_decode($response->getBody()->getContents(), true)['hydra:member'];

        foreach ($repositories as $repository) {
            $response = $client->get('https://api.github.com/repos/'.$repository['name'], ['auth' => $auth]);
            $content = json_decode($response->getBody()->getContents(), true);
            $stars = $content['stargazers_count'];

            $parameters = [
                '_format' => 'json',
                'repository' => $repository['name'],
                'stars' => $stars,
                'measureDatetime' => $now->format($ISO8601)
            ];

            if (!$input->getOption('test')) {
                $client->post($host.'/github_stars_measures', ['body' => json_encode($parameters)]);
                $output->writeln('Added entry to db');
            }
        }
    }
}
