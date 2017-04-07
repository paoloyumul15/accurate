@extends("layouts.base")

@section("app")
    <router-link to="/" exact>Dashboard</router-link>
    <router-link to="/settings" exact>Settings</router-link>
    <router-view></router-view>
@stop
