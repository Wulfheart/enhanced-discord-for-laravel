<?php

namespace Wulfheart\Discord\Commands;

use Illuminate\Console\Command;

class DiscordCommand extends Command
{
    public $signature = 'enhanced-discord-for-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
