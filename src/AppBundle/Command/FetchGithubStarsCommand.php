<?php

namespace AppBundle\Command;

use Guzzle\Common\Exception\ExceptionCollection;
use GuzzleHttp\Client;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
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
            ->setDescription('Hello PhpStorm');
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
        $response = $client->get($host.'/watched_repositories?_format=json', ['auth'=>$auth]);
        $repositories = json_decode($response->getBody()->getContents(), true)['hydra:member'];

        foreach ($repositories as $repository) {
            $response = $client->get('https://api.github.com/repos/'.$repository['name'], ['auth' => $auth]);
            $content = json_decode($response->getBody()->getContents(), true);

            $parameters = [
                '_format' => 'json',
                'repository' => $repository['name'],
                'content' => json_encode($content),
                'measureDatetime' => $now->format($ISO8601)
            ];

            $client->post($host.'/github_stars_measures', ['body' => json_encode($parameters)]);
        }
    }
}
