<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\BirthdayGreetings;

class SendBirthdayGreetings extends Command
{
    protected $signature = 'send:birthday-greetings';
    protected $description = 'Send birthday greetings to users';

    public function handle()
    {
        // Найти пользователей, у которых сегодня день рождения
        $today = Carbon::now()->format('m-d');
        $usersWithBirthday = User::whereRaw("DATE_FORMAT(birthday, '%m-%d') = '{$today}'")->get();

        // Отправить письмо каждому пользователю
        foreach ($usersWithBirthday as $user) {
            Mail::to($user->email)->send(new BirthdayGreetings($user));
            $this->info("Birthday greetings sent to {$user->name} ({$user->email})");
        }

        $this->info('Birthday greetings sent successfully.');
    }
}
