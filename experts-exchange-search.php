<?php
/*
Plugin Name: Experts Exchange Search
Plugin URI: http://experts-exchange.com/
Description: This plugin will add a widget for searching Experts Exchange. Click edit and select the stylesheet to change styles.
Author: Experts Exchange
Version: 1
Author URI: http://experts-exchange.com/
*/

function widget_eesearch($args) {
  $asdf = '
<div id="eeSrchFrm">
  <form onsubmit="postAsycOmnitureGoogleSearch(\'gSearch_1\');" id="expertsExchangeSearch" method="get" action="http://www.experts-exchange.com/simpleSearch.jsp" class="formFactory">
    <fieldset>
      <div class="eetitle"><span>Search for answers at Experts Exchange</span></div>
      <div class="container">
        <div class="input text">
          <input type="hidden" value="1" name="sfFreshSearch">
          <input type="hidden" value="EE Search" name="omnitureSearchType">
          <input type="hidden" value="2612" name="cid">
          <input type="hidden" value="/" name="redirectURL">
          <input type="text" id="gsearchBox" class="textInput" value="" name="q">
        </div>
        <div class="input button">
          <input type="submit" name="searchSubmit" value="Search" class="tsSubmit">
        </div>
        <a title="Advanced Search" class="advSrchLink" rel="nofollow" href="http://www.experts-exchange.com/advancedSearch.jsp">advanced search</a>
      </div>
    </fieldset>
  </form>
</div>
  ';
  $begincss = '<style type="text/css">';
  $endcss = '</style>';
  extract($args);
  echo $before_widget;
  echo $before_title;?><?php echo $after_title; //title goes here between question carats
  echo $asdf;
  echo $after_widget;
  echo $begincss;
  include 'reset.css';
  echo $endcss;
  echo $begincss;
  include 'style.css';
  echo $endcss;
}
 
function eesearch_init()
{
  register_sidebar_widget(__('Search Experts Exchange'), 'widget_eesearch');
}
add_action("plugins_loaded", "eesearch_init");
?>
