<?php

namespace AppBundle\Command;

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
        $client = new Client(['base_url' => 'http://localhost']);
//        $repositories = $client->request('GET', 'http://localhost/watched_repositories?_format=json');
        $response = $client->get('http://localhost/watched_repositories?_format=json');
        $repositories = json_decode($response->getBody()->getContents(), true)['hydra:member'];

        foreach ($repositories as $repository) {
            $response = $client->get('https://api.github.com/repos/'.$repository['name']);
            $res = $client->get('https://api.github.com/repos/'.$repository['name']);
            $stars = json_decode($response->getBody()->getContents(), true)['stargazers_count'];
            var_dump($stars);
        }
//            'auth' => ['user', 'pass']
    }
}
