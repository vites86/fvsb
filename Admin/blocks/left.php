<div id="left">
        <div class="media user-media bg-dark dker">
          <div class="user-media-toggleHover">
            <span class="fa fa-user"></span> 
          </div>
          <div class="user-wrapper bg-dark">
            <a class="user-link" href="">
              <?php 
              echo "<img style='height:50px;' class='media-object img-thumbnail user-img' alt='User Picture'  src='assets/img/users/".$login.".png' class='img-circle' alt='$login'>";   ?> 
              <span class="label label-danger user-label"><?php echo $connects_count; ?></span> 
            </a> 
            <div class="media-body">
              <h5 class="media-heading"><?php echo $user_role_description; ?></h5>
              <ul class="list-unstyled user-info">
                <li><span style='color:red'> <?php echo $user_name ?></span></li>
                <li>Останній вхід :
                  <br>
                  <small>
                    <i class="fa fa-calendar"></i>&nbsp;<?php echo $last_connect; ?></small> 
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- #menu -->
        <ul id="menu" class="bg-dark dker">
          <li class="nav-header">Меню</li>
          <li class="nav-divider"></li>
          <li class="">
            <a href="index.php?id=1">
              <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Головна</span> 
            </a> 
          </li>
          <li class="">
            <a href="javascript:;">
              <i class="fa fa-building "></i>
              <span class="link-title">Новини</span> 
              <span class="fa arrow"></span> 
            </a> 
            <ul>
              <li>
                <a href="index.php?id=3">
                  <i class="fa fa-angle-right"></i>&nbsp; Дадати новину </a> 
              </li>
              <li>
                <a href="index.php?id=5">
                  <i class="fa fa-angle-right"></i>&nbsp; Редагувати новину </a> 
              </li>
              <li>
                <a href="index.php?id=4">
                  <i class="fa fa-angle-right"></i>&nbsp; Видалити новину </a> 
              </li>      
            </ul>
          </li>
         

           <li class="">
            <a href="javascript:;">
              <i class="fa fa-building "></i>
              <span class="link-title">Найближі події</span> 
              <span class="fa arrow"></span> 
            </a> 
            <ul>
              <li>
                <a href="index.php?id=8">
                  <i class="fa fa-angle-right"></i>&nbsp; Дадати подію </a> 
              </li>
              <li>
                <a href="index.php?id=9">
                  <i class="fa fa-angle-right"></i>&nbsp; Редагувати подію </a> 
              </li>
              <li>
                <a href="index.php?id=10">
                  <i class="fa fa-angle-right"></i>&nbsp; Видалити подію </a> 
              </li>      
            </ul>
          </li>
          <li class="">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span class="link-title">Галерея</span> 
              <span class="fa arrow"></span> 
            </a> 
            <ul>
              <li>
                <a href="index.php?id=6">
                  <i class="fa fa-angle-right"></i>&nbsp; Добавити фото </a> 
              </li>
              <li>
                <a href="index.php?id=7">
                  <i class="fa fa-angle-right"></i>&nbsp; Видалити фото </a> 
              </li>
            </ul>
          </li>
          <!-- <li class="">
            <a href="javascript:;">
              <i class="fa fa-pencil"></i>
              <span class="link-title">Спортсмени</span> 
              <span class="fa arrow"></span> 
            </a> 
            <ul>
              <li>
                <a href="index.php?id=11">
                  <i class="fa fa-angle-right"></i>&nbsp; Додати cпортсмена </a> 
              </li>
              <li>
                <a href="index.php?id=13">
                  <i class="fa fa-angle-right"></i>&nbsp; Видалити cпортсмена </a> 
              </li>
              <li>
                <a href="index.php?id=12">
                  <i class="fa fa-angle-right"></i>&nbsp; Редагувати cпортсмена </a> 
              </li>
            </ul>
          </li>          -->
         
          <li class="">
            <a href="javascript:;">
              <i class="fa fa-pencil"></i>
              <span class="link-title">Члени федерації</span> 
              <span class="fa arrow"></span> 
            </a> 
            <ul>
              <li>
                <a href="paticiepents.php">
                  <i class="fa fa-angle-right"></i>&nbsp; Усі члени </a>                   
              </li>
              <li>
                <a href="sportsmen.php">
                  <i class="fa fa-angle-right"></i>&nbsp; Спортсмени </a> 
              </li>
              <li>
                <a href="jugges.php">
                  <i class="fa fa-angle-right"></i>&nbsp; Судді </a> 
              </li>
              <li>
                <a href="headers.php">
                  <i class="fa fa-angle-right"></i>&nbsp; Керівники підрозділів </a> 
              </li>
              <li>
                <a href="index.php?id=11">
                  <i class="fa fa-angle-right"></i>&nbsp; Додати члена федерації </a> 
              </li>
            </ul>
          </li>    
         
          <li>
            <a href="php_version.php">
              <i class="fa fa-file"></i>
              <span class="link-title">PHP version</span> 
            </a> 
          </li>
         <!--  <li>
            <a href="typography.html">
              <i class="fa fa-font"></i>
              <span class="link-title">Блог</span>  </a> 
          </li> -->
          <!-- <li>
            <a href="maps.html">
              <i class="fa fa-map-marker"></i>
              <span class="link-title">Maps</span> 
            </a> 
          </li>
          <li>
            <a href="chart.html">
              <i class="fa fa fa-bar-chart-o"></i>
              <span class="link-title">Charts</span> 
            </a> 
          </li>
          <li>
            <a href="calendar.html">
              <i class="fa fa-calendar"></i>
              <span class="link-title">Calendar</span> 
            </a> 
          </li>         
          <li>
            <a href="grid.html">
              <i class="fa fa-columns"></i>
              <span class="link-title">Grid</span> 
            </a> 
          </li>
          <li>
            <a href="blank.html">
              <i class="fa fa-square-o"></i>
              <span class="link-title">
    Blank Page
    </span> 
            </a> 
          </li>
          <li class="nav-divider"></li>
          <li>
            <a href="login.html">
              <i class="fa fa-sign-in"></i>
              <span class="link-title">
    Login Page
    </span> 
            </a> 
          </li>
          <li>
            <a href="javascript:;">
              <i class="fa fa-code"></i>
              <span class="link-title">
    	Unlimited Level Menu 
    	</span> 
              <span class="fa arrow"></span> 
            </a> 
            <ul>
              <li>
                <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a> 
                <ul>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li>
                    <a href="javascript:;">Level 2  <span class="fa arrow"></span>  </a> 
                    <ul>
                      <li> <a href="javascript:;">Level 3</a>  </li>
                      <li> <a href="javascript:;">Level 3</a>  </li>
                      <li>
                        <a href="javascript:;">Level 3  <span class="fa arrow"></span>  </a> 
                        <ul>
                          <li> <a href="javascript:;">Level 4</a>  </li>
                          <li> <a href="javascript:;">Level 4</a>  </li>
                          <li>
                            <a href="javascript:;">Level 4  <span class="fa arrow"></span>  </a> 
                            <ul>
                              <li> <a href="javascript:;">Level 5</a>  </li>
                              <li> <a href="javascript:;">Level 5</a>  </li>
                              <li> <a href="javascript:;">Level 5</a>  </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li> <a href="javascript:;">Level 4</a>  </li>
                    </ul>
                  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                </ul>
              </li>
              <li> <a href="javascript:;">Level 1</a>  </li>
              <li>
                <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a> 
                <ul>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                </ul>
              </li>
            </ul> -->
          <!-- </li> -->
        </ul><!-- /#menu -->
      </div><!-- /#left -->