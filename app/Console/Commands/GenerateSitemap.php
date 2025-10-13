<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
         $sitemap = Sitemap::create()
            ->add(Url::create('/')->setPriority(1.0))
            ->add(Url::create('/sobre')->setPriority(0.9))
            ->add(Url::create('/faqs')->setPriority(0.7))
            ->add(Url::create('/historia')->setPriority(0.8))
            ->add(Url::create('/equipa')->setPriority(0.9))
            ->add(Url::create('/termos')->setPriority(0.9))
            ->add(Url::create('/frotas')->setPriority(0.9))
            ->add(Url::create('/contacto')->setPriority(0.9));

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('sitemap.xml gerado com sucesso!');
    }
}
