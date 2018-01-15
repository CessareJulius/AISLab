<?php
    /**
     * People routes for an application.
     *
     * @return void
     */

    public function people()
    {
        $this->get('people', 'PeopleController@index')->middleware('auth')->name('people');

        $this->get('people/{val}/{name}', 'PeopleController@view')->middleware('auth')->name('people.view');

        $this->get('people/edit/{name}', 'PeopleController@edit')->middleware('auth')->name('people.edit');
    }

    /**
     * Users routes for an application.
     *
     * @return void
     */
    public function users()
    {
        $this->get('users', 'UsersController@index')->middleware('auth')->name('users');

        $this->get('users/home', 'UsersController@home')->middleware('auth')->name('users.home');

        $this->get('users/add', 'UsersController@add')->middleware('auth')->name('users.add');

        $this->get('users/{username}', 'UsersController@view')->where('username', '[0-9]+')->middleware('auth')->name('users.view');

        $this->get('users/profile/{id}', 'UsersController@view')->where('id', '[0-9]+')->middleware('auth')->name('users.profile');

        $this->get('users/edit/{id}', 'UsersController@edit')->where('id', '[0-9]+')->middleware('auth')->name('users.edit');
    }