@extends('shop::base')

@section('aimeos_header')
    <?= $aiheader['locale/select'] ?? '' ?>
    <?= $aiheader['account/profile'] ?? '' ?>
    <?= $aiheader['account/review'] ?? '' ?>
    <?= $aiheader['account/subscription'] ?? '' ?>
    <?= $aiheader['account/history'] ?? '' ?>
    <?= $aiheader['account/favorite'] ?? '' ?>
    <?= $aiheader['account/watch'] ?? '' ?>
    <?= $aiheader['catalog/session'] ?? '' ?>
@stop

@section('aimeos_head')
    <?= $aibody['locale/select'] ?? '' ?>
    <?= $aibody['basket/mini'] ?? '' ?>
@stop

@section('aimeos_body')
    <?= $aibody['account/profile'] ?? '' ?>
    <?= $aibody['account/review'] ?? '' ?>
    <?= $aibody['account/subscription'] ?? '' ?>
    <?= $aibody['account/history'] ?? '' ?>
    <?= $aibody['account/favorite'] ?? '' ?>
    <?= $aibody['account/watch'] ?? '' ?>
@stop

@section('aimeos_aside')
    <?= $aibody['catalog/session'] ?? '' ?>
@stop
