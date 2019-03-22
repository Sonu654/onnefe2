<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $data['title']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript">
            baseurl = "<?php echo baseurl; ?>";
            user = "<?php echo !empty($data['user'])?$data['user']:''; ?>";
        </script>
        <link rel="shortcut icon" href="<?php echo baseurl ?>/Assets/Img/logo.png"/>
        <link type="text/css" rel="stylesheet" href="<?php echo baseurl; ?>/Assets/CSS/bootstrap.min.css"/>

        <script type="text/javascript">
            /*    var myVar = setInterval(myTimer, 1000);
             function myTimer() {
             var d = new Date();
             document.getElementById("time").innerHTML = d.toLocaleTimeString();
             }*/
        </script>
        <style type="text/css">


        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top" id="header">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#interests">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                        </button>
                        <a class="navbar-brand" href="<?php echo baseurl; ?>/ONNEFE/Index">
                            <img class="img img-responsive" id="logo" src="<?php echo baseurl ?>/Assets/Img/logo.png"/>
                        </a> 
                    </div>

                    <div class="nav navbar-nav collapse navbar-collapse navbar-right" id="interests">
                        <?php if (isset($data['interest'])) { ?>
                            <ul clasS="nav nav-pills navbar-right" style="color:white">
                                <?php
                                $mainkeys = array_keys($data);
                                for ($i = 0; $i < count($mainkeys); $i++) {
                                    if (@$mainkeys[$i] == 'interest') {
                                        $cat = $data[$mainkeys[$i]];
                                        $key = array_keys($cat);
                                        for ($j = 0; $j < count($key); $j++) {
                                            foreach ($cat[$key[$j]] as $ky => $value) {
                                                if ($ky == 'category_id')
                                                    $id = $value;
                                                else if ($ky == 'isActive')
                                                    ;
                                                else
                                                    $name = $value;
                                            }
                                            ?> <li><button class="btn btn-primary interest"  onclick="getCatNews(<?php echo $id; ?>)"><?php echo $name; ?></button></li>
                                            <?php
                                            //print_r($cat[$key[$j]]);
                                        }
                                    }
                                }
                                ?>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="btn btn-primary" href="<?php echo baseurl;?>/Profile/NewsGroup/<?php echo $data['user']; ?>">News Group</a></li>
                                        <li><a class="btn btn-success" href="<?php echo baseurl; ?>/Profile/Index/<?php echo $data['user']; ?>">Profile</a></li>
                                        <li><a class="btn btn-danger" href="<?php echo baseurl; ?>/ONNEFE/Logout">Logout</a></li>
                                    </ul>
                                </li> 


                            </ul>
                            <?php
                            //print_r($data['interest']); 
                        }
                        ?>
                    </div>

                </div>
                </div>
                </div>
            </nav>
        </header>	
        <div class="container-fluid" id="center">

