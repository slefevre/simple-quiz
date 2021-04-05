<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$i = 0;
        \DB::table('questions')->insert([
            [
                'wording' => "What is the average air speed velocity of a laden swallow?",
                'answer' => '12',
                'created_at' => Carbon::now(),
                'sort' => ++$i,
            ],
            [
                'wording' => "What do you get when you multiply six by nine?",
                'answer' => '42',
                'created_at' => Carbon::now(),
                'sort' => ++$i,
            ],
            [
                'wording' => "What is your father's middle name?",
                'answer' => 'George',
                'created_at' => Carbon::now(),
                'sort' => ++$i,
            ],
            [
                'wording' => "How many licks does it take to get to the tootsie roll center of a tootsie pop?",
                'answer' => '300',
                'created_at' => Carbon::now(),
                'sort' => ++$i,
            ],
            [
                'wording' => "What would you do for a Klondike bar?",
                'answer' => 'Anything',
                'created_at' => Carbon::now(),
                'sort' => ++$i,
            ],
        ]);
    }
}
