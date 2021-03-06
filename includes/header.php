<?php

$url = isset(parse_url($_SERVER['REQUEST_URI'])['path']) ?  parse_url($_SERVER['REQUEST_URI'])['path'] : '';

?>
<div class="ui container rv-header <?php echo ($user_device != 'mobile')  ? 'mbot10' : ''; ?>">
    <div class="ui large secondary inverted pointing menu wrapper">
        <a class="toc item ln30" style="margin-bottom: 5px;">
          <i class="sidebar icon"></i>
        </a>
        <a href="/" style="border-left:1px solid #4d4d4d" class="item ln30 <?php echo ($url == '/' || $url == '' || $url == '/index') ? 'current-page': ''; ?>">Home</a>
        <a href="/matchups" class="item ln30 <?php echo ($url == '/matchups') ? 'current-page': ''; ?>">Matchups</a>
        <a href="/teams" class="item ln30">Teams</a>
        <a href="/judges" style="border-right:1px solid #4d4d4d" class="item ln30">Judges</a>
      <div class="right item" style="<?php echo $user_device == 'mobile' ? 'padding-right:10px' : 'padding-right:0px'; ?>">
        <div class=mr10>
          <a href="/contact" class="ui inverted button">Contact</a>
        </div>
        <div>
          <a href="/schedule" class="ui inverted button">Schedule</a>
        </div>
      </div>
    </div>
</div>

<?php if($user_device == 'mobile') { ?>
  <!-- Sidebar Menu -->
  <div class="ui vertical inverted sidebar menu">
    <a href="/" class="item">Home</a>
    <a href="/matchups" class="item">Matchups</a>
    <a href="/teams" class="item">Teams</a>
    <a href="/judges" class="item">Judges</a>
    <a href="/contact" class="item">Contact</a>
    <a href="/schedule" class="item">Schedule</a>
  </div>
<?php } ?>
