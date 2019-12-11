<!DOCTYPE html>
<html lang="{{ \App::getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <title>{{ $reward->title }}</title>

    <link rel="canonical" href="{{ url()->full() }}">

<?php if ($reward->favicon != null) { ?>
    <link rel="shortcut icon" type="image/x-icon" href="{{ $reward->favicon }}" />
<?php } elseif ($reward->image_file_name != null) { ?>
    <link rel="icon" type="image/png" href="{{ url($reward->image->url('favicon')) }}" />
<?php } else { ?>
    <link rel="shortcut icon" href="{{ url('favicon.ico') }}" type="image/x-icon" />
<?php } ?>

@include('layouts._general-content-includes')

<?php if (isset($color)) { ?>
    <meta name="theme-color" content="{{ $color }}">
<?php } ?>

  </head>
  <body>
    <div class="container max-width-600">
      <div class="row">
        <div class="col-12">
          <div class="mt-4 mt-md-5">
            <h1 class="mb-0 mb-md-2 text-center">{!! $reward->title !!}</h1>
            <p class="lead text-center">{!! $reward->checkedInText !!}</p>
            <div class="text-center">
              <a href="{{ url('reward/' . $reward_hash) }}">
                <i class="mi text-success done" style="font-size: 14rem"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

@include('layouts._general-content-includes-footer')

  </body>
</html>