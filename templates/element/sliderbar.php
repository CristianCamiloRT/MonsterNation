<nav id="sidebar">
    <div class="sidebar_blog_1">
        <div class="sidebar-header">
            <div class="logo_section">
                <?= $this->Html->image('Img_IconoPestana3.png', [
                        'alt' => 'Logo Pantera',
                        'url' => ['controller' => 'Users', 'action' => 'index'],
                        'class' => 'logo_icon img-responsive'
                    ]);
                ?>
            </div>
        </div>
        <div class="sidebar_user_info">
            <div class="icon_setting"></div>
            <div class="user_profle_side">
                <div class="user_img">
                    <?= $this->Html->image('user_img.jpg', [
                            'alt' => 'Img User',
                            'class' => 'img-responsive'
                        ]); 
                    ?>
                </div>
                <div class="user_info">
                <h6>Admin</h6>
                <p><span class="online_animation"></span> Online</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar_blog_2">
        <h4>Menú</h4>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-users yellow_color"></i> <span>Usuarios</span></a>
                <ul class="collapse list-unstyled" id="dashboard">
                <li>
                    <?= $this->Html->link(__('> <span>Lista de Usuarios</span>'),
                        [
                            'controller' => 'Users',
                            'action' => 'index'
                        ],
                        [
                            'escape' => false
                        ])
                    ?>
                </li>
                <li>
                    <?= $this->Html->link(__('> <span>Crear Usuario</span>'),
                        [
                            'controller' => 'Users',
                            'action' => 'add'
                        ],
                        [
                            'escape' => false
                        ])
                    ?>
                </li>
                </ul>
            </li>
            <li>
                <a href="#Exercises" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-star purple_color"></i> <span>Ejercicios</span></a>
                <ul class="collapse list-unstyled" id="Exercises">
                <li>
                    <?= $this->Html->link(__('> <span>Lista de Ejercicios</span>'),
                        [
                            'controller' => 'Exercises',
                            'action' => 'index'
                        ],
                        [
                            'escape' => false
                        ])
                    ?>
                </li>
                <li>
                    <?= $this->Html->link(__('> <span>Crear Ejercicio</span>'),
                        [
                            'controller' => 'Exercises',
                            'action' => 'add'
                        ],
                        [
                            'escape' => false
                        ])
                    ?>
                </li>
                </ul>
            </li>
            <!-- <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
            <li><a href="charts.html"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li>
            <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li> -->
        </ul>
    </div>
    </nav>