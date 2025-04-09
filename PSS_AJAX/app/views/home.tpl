{extends file="main.tpl"}


{block name=top}

<div class="video-background-container">
    <video autoplay muted loop class="video-background">
      <source src="{$conf->app_url}/vid/home_bg.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
  {/block}