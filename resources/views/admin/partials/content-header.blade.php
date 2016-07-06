<?php
$title = isset($title) ? $title : '';
$subtitle = isset($subtitle) ? $subtitle : '';
$msg = isset($msg) ? $msg : '';
?>

<section class="content-header">
    <h1>
        <% $title %>
        <small><% $subtitle %></small>
    </h1>
    <div class="breadcrumb">
        <% $msg %>
    </div>
</section>
