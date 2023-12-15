<?php

namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $choice = $this->app->old('choice');
        $taken = $this->app->old('taken');
        $play = $this->app->old('play'); // pass this data to the view to display

        return $this->app->view('index', [
            'choice' => $choice,
            'taken' => $taken,
            'play' => $play

        ]);
    }
    public function process()
    {
        $this->app->validate([
            'choice' => 'required'
        ]);
        $choice = $this->app->input('choice');
        $taken = ['1pm','2pm','3pm'][rand(0, 2)];
        $play = $choice != $taken;

        //going to redirect back to index
        // dump($this->app->inputALL());
        //  dump($perform_time);
        //    dump($taken);
        //   dump($avail);

        #TODO: persist round details to the database

        $this->app->db()->insert('rounds', [
            'choice' => $choice,
            'play' => ($play) ? 1 : 0,  // need to convert the boolean with the ternary
            'timestamp' => date('Y-m-d H:i:s')
        ]);

        return $this->app->redirect('/', ['choice' => $choice, 'taken' => $taken,'play' => $play,]);  # flashing data on this redirct to homepage

    }
    public function history()
    {
        $rounds = $this->app->db()->all('rounds');
        dump($rounds);
        return $this->app->view('history', ['rounds' => $rounds]);

    }
    public function round()
    {
        $id = $this->app->param('id');
        $round = $this->app->db()->findById('rounds', $id);
        return $this->app->view('round', ['round' => $round]);
    }
}