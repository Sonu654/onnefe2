
<div class="row"> 
    <div class="col-sm-3">
       <?php $this->view('Feeds'); ?>
       
    </div>
    <div class="col-sm-9">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <marquee style="padding:0 15px; height:450px;" direction="up" onMouseover="this.stop()" onMouseout="this.start()">
                        <?php //$news = json_decode($data['slider_news'], TRUE); 
                        ?>
                        <script>
                            news =<?php echo $data['slider_news']; ?>;
                            out = "";
                            for (i = 0; i < news.length; i++) {
                                out += "<div class='row'>";
                                out += "<h3>" + news[i].news_heading + "</h3>";
                                out += "<p id='jNContent'>" + news[i].news_content + "</p>";
                                out += "<div class='row' id='jnews'>";
                                out += "<div class='col-sm-4'>" + news[i].time + "</div>";
                                out += "<div class='col-sm-4' style='text-align:center'>" + news[i].ack_location + "</div>";
                                out += "<div class='col-sm-4' style='text-align:right'>" + news[i].category_name + "</div>";
                                out += "</div></div>";
                            }
                            document.write(out);
                            //document.getElementById('slider').innerHTML = out;
                        </script>
                    </marquee>
                </div>
            </div>
            <div class="col-sm-4">
                <div id="login" class=""><h2>Login Details</h2>
                    <form name="login_form" class="form" action="<?php echo baseurl; ?>/ONNEFE/Login" method="post">
                        <div class="form-group">
                            <lable for="userName"><span class="glyphicon glyphicon-user"></span>User Name</lable>
                            <input class="form-control" name="user" type="email">
                        </div>
                        <div class="form-group">
                            <lable for="pwd"><span class="glyphicon glyphicon-asterisk"></span>Password</lable>
                            <input class="form-control" name="pwd" type="password">
                        </div>
                        <div class="form-group"><label class="checkbox-inline"><input type="checkbox" value="true" name="Loggedin">Keep me Logged in</label></div>
                        <div class="form-group">
                            <button class="btn btn-primary"><span class="glyphicon glyphicon-log-in"><span>&nbsp;Login</button>
                                        <button class="btn btn-danger" id="regButton"><span class="glyphicon glyphicon-registration-mark"><span>&nbsp;Register</button>
                                                    </div>
                                                    </form>
                                                    <?php
                                                    if (isset($_GET['error'])) {
                                                        echo '<div class="form-group error"><b>**' . $_GET['error'] . '</b></div>';
                                                    }
                                                    ?>
                                                    <a href="<?php echo baseurl; ?>/ONNEFE/Forget">Forget Password</a>
                                                    </div>
                                                    <div id="register"><h2>Registration Details</h2>
                                                        <form name="register_form" class="form" action="<?php echo baseurl; ?>/ONNEFE/Register" method="post">
                                                            <div class="form-group">
                                                                <lable for="userName"><span class="glyphicon glyphicon-user"></span>Name</lable>
                                                                <table>
                                                                    <tr>
                                                                        <td>
                                                                            <input class="form-control" name="ufname" type="text" placeholder="First" required="required">
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-control" name="umname" type="text" placeholder="Mid">
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-control" name="ulname" type="text" placeholder="Last" required="required">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class="form-group">
                                                                <lable for="email"><span class="glyphicon glyphicon-envelope"></span>Email</lable>
                                                                <input class="form-control" name="email" type="email" required="required">
                                                            </div>
                                                            <div class="form-group">
                                                                <lable for="email"><span class="glyphicon glyphicon-envelope"></span>Repeat email</lable>
                                                                <input class="form-control" name="remail" type="email" required="required">
                                                            </div>
                                                            <div class="form-group">
                                                                <lable for="pwd"><span class="glyphicon glyphicon-asterisk"></span>Password</lable>
                                                                <input class="form-control" name="pwd" type="password" required="required">
                                                            </div>
                                                            <div class="form-group">
                                                                <lable for="pwd"><span class="glyphicon glyphicon-asterisk"></span>Repeat Password</lable>
                                                                <input class="form-control" name="rpwd" type="password" required="required">
                                                            </div>
                                                            <div class="from-group">
                                                                <label for="gender"><span class="glyphicon glyphicon-user"></span>Gender</label><br/>
                                                                <label class="radio-inline"><input type="radio" name="gender" value="male">Male</label>
                                                                <label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
                                                            </div><br/>
                                                            <div class="form-group">
                                                                <label for="dob"><span class="glyphicon glyphicon-calendar"></span>Date of Birth</label>
                                                                <input type="date" class="form-control" name="dob" required="required">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="contact"><span class="glyphicon glyphicon-phone"></span>Contact</label>
                                                                <input type="text" class="form-control" name="contact" placeholder="XXXX-XXXXXX" required="required">
                                                            </div>
                                                            <div class="from-group">
                                                                <lable for="interest" id="selectedCat"><span class="glyphicon glyphicon-book"></span>News Interests</lable>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" id="dw">Select
                                                                        <span class="caret" style="float:right; margin-top:8px;"></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu menu-item" id="catList">
                                                                        <?php
                                                                        $mainkeys = array_keys($data);
                                                                        for ($i = 0; $i < count($mainkeys); $i++) {
                                                                            if (@$mainkeys[$i] == 'category') {
                                                                                $cat = $data[$mainkeys[$i]];
                                                                                $key = array_keys($cat);
                                                                                for ($j = 0; $j < count($key); $j++) {
                                                                                    foreach ($cat[$key[$j]] as $ky => $value) {
                                                                                        if ($ky == 'category_id') {
                                                                                            $val = $value;
                                                                                        } elseif ($ky == 'category_name')
                                                                                            $cap = $value;
                                                                                    }
                                                                                    ?>
                                                                                    <li>
                                                                                        <div class="checkbox"  id="newsCatVal">
                                                                                            <label class="checkbox-inline category">
                                                                                                <input type="checkbox" value="<?php echo $val; ?>" name="category[]"><?php echo $cap; ?>
                                                                                            </label>
                                                                                        </div>
                                                                                    </li>
                                                                                    <?php
                                                                                }
                                                                            }
                                                                        }
                                                                        ?>  
                                                                    </ul>
                                                                </div>
                                                            </div><br/>
                                                            <div class="form-group">
                                                                <lable for="Address"><span class="glyphicon glyphicon-globe"></span>Address</lable>
                                                                <input class="form-control" name="street" type="text" placeholder="Street"><br>
                                                                <input class="form-control" name="city" type="text" placeholder="City"><br>
                                                                <input class="form-control" name="state" type="text" placeholder="State"><br>
                                                                <input class="form-control" name="country" type="text" placeholder="Country"><br>

                                                            </div>
                                                            <div class="form-group">
                                                                <button class="btn btn-primary" id="logButton"><span class="glyphicon glyphicon-log-in "><span>&nbsp;Login</button>
                                                                            <button class="btn btn-danger"><span class="glyphicon glyphicon-registration-mark"><span>&nbsp;Register</button>

                                                                                        </div>
                                                                                        </form>
                                                                                        </div>
                                                                                        </div>
                                                                                        </div>
                                                                                        </div>
                                                                                        </div>
