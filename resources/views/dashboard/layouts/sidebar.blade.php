<aside class="sidebar">
    <nav class="navbar">
        <a class="navbar-brand brand-title" href="#">
            <img src="/assets/images/light.png" alt="" class="logo">
        </a>
    </nav>
    <nav class="navigation shadow-sm">
        <div class="navigation-arrow">
            <i class="material-icons">chevron_left</i>
        </div>
        <ul>
            <li>
                <a href="{{ Route('dashboard.dashboard') }}" class="@if (Route::is('dashboard.dashboard')) active @endif">
                    <span class="icon material-icons">dashboard</span>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="separator">
                <span>Products Management</span>
            </li>
            {{-- <li>
                <a href="#collapseSubmenu1" class="___class_+?17___" data-toggle="collapse">
                    <span class="caret material-icons">arrow_right</span>
                    <span class="icon material-icons">apps</span>
                    <span class="text">Applications</span>
                </a>
                <ul class="collapse" id="collapseSubmenu1">
                    <li>
                        <a href="mail.html" class="___class_+?22___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Mailbox</span>
                            <span class="badge badge-transparent-danger">1</span>
                        </a>
                    </li>
                    <li>
                        <a href="calendar.html" class="___class_+?26___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href="kanban.html" class="___class_+?29___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Kanban</span>
                        </a>
                    </li>
                    <li>
                        <a href="contacts.html" class="___class_+?32___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Contacts</span>
                        </a>
                    </li>
                </ul>
            </li> --}}
            <li>
                <a href="{{ Route('dashboard.product.index') }}" class="@if (Route::is('dashboard.product.*') || Route::is('dashboard.discount.*') ) active @endif">
                    <span class="icon material-icons">file_copy</span>
                    <span class="text">Products</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('dashboard.category.index') }}" class="@if (Route::is('dashboard.category.*')) active @endif">
                    <span class="icon material-icons">category</span>
                    <span class="text">Category</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('dashboard.courier.index') }}" class="@if (Route::is('dashboard.courier.*')) active @endif">
                    <span class="icon material-icons">electric_rickshaw</span>
                    <span class="text">Courier</span>
                </a>
            </li>


            <li class="separator">
                <span>UI Elements & Components</span>
            </li>
            <li>
                <a href="#uiElements" class="___class_+?70___" data-toggle="collapse">
                    <span class="caret material-icons">arrow_right</span>
                    <span class="icon material-icons">extension</span>
                    <span class="text">Elements</span>
                </a>
                <ul class="collapse" id="uiElements">

                    <li>
                        <a href="alerts.html" class="___class_+?75___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Alerts</span>
                        </a>
                    </li>

                    <li>
                        <a href="badges.html" class="___class_+?78___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Badges</span>
                        </a>
                    </li>
                    <li>
                        <a href="buttons.html" class="___class_+?81___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Buttons</span>
                        </a>
                    </li>
                    <li>
                        <a href="cards.html" class="___class_+?84___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Cards</span>
                        </a>
                    </li>

                    <li>
                        <a href="context-menu.html" class="___class_+?87___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Context menu</span>
                        </a>
                    </li>


                    <li>
                        <a href="icons.html" class="___class_+?90___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Icons</span>
                        </a>
                    </li>

                    <li>
                        <a href="typography.html" class="___class_+?93___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Typography</span>
                        </a>
                    </li>
                    <li>
                        <a href="flex-grid.html" class="___class_+?96___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Flexbox Grids</span>
                        </a>
                    </li>
                    <li>
                        <a href="spinners.html" class="___class_+?99___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Spinners</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#uiComponents" class="___class_+?102___" data-toggle="collapse">
                    <span class="caret material-icons">arrow_right</span>
                    <span class="icon material-icons">backup_table</span>
                    <span class="text">Components</span>
                </a>
                <ul class="collapse" id="uiComponents">
                    <li>
                        <a href="accordians.html" class="___class_+?107___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Accordians</span>
                        </a>
                    </li>
                    <li>
                        <a href="avatar.html" class="___class_+?110___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Avatar</span>
                        </a>
                    </li>
                    <li>
                        <a href="colors.html" class="___class_+?113___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Colors</span>
                        </a>
                    </li>
                    <li>
                        <a href="modals.html" class="___class_+?116___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Modals</span>
                        </a>
                    </li>
                    <li>
                        <a href="notifications.html" class="___class_+?119___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Notifications</span>
                        </a>
                    </li>
                    <li>
                        <a href="tabs.html" class="___class_+?122___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Tabs & Pills</span>
                        </a>
                    </li>
                    <li>
                        <a href="timeline.html" class="___class_+?125___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Timeline</span>
                        </a>
                    </li>
                    <li>
                        <a href="tooltips.html" class="___class_+?128___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Tooltips & Popovers</span>
                        </a>
                    </li>
                </ul>

            </li>

            <li>
                <a href="#formStuff" class="___class_+?131___" data-toggle="collapse">
                    <span class="caret material-icons">arrow_right</span>
                    <span class="icon material-icons">assignment</span>
                    <span class="text">Form Stuff</span>
                </a>
                <ul class="collapse" id="formStuff">
                    <li>
                        <a href="forms.html" class="___class_+?136___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Form Styling</span>
                        </a>
                    </li>
                    <li>
                        <a href="validations.html" class="___class_+?139___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Validation</span>
                        </a>
                    </li>
                    <li>
                        <a href="pickers.html" class="___class_+?142___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Pickers</span>
                        </a>
                    </li>
                    <li>
                        <a href="uploaders.html" class="___class_+?145___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Uploader</span>
                        </a>
                    </li>
                    <li>
                        <a href="wysiwyg.html" class="___class_+?148___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">WYSIWYG Editors</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#data-grid-menu" class="___class_+?151___" data-toggle="collapse">
                    <span class="caret material-icons">arrow_right</span>
                    <span class="icon material-icons">grid_on</span>
                    <span class="text">Data Grids</span>
                </a>
                <ul class="collapse" id="data-grid-menu">
                    <li>
                        <a href="tables.html" class="___class_+?156___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Simple Table</span>
                        </a>
                    </li>
                    <li>
                        <a href="data-tables.html" class="___class_+?159___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Data Tables</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#charts-menu" data-toggle="collapse">
                    <span class="caret material-icons">arrow_right</span>
                    <span class="icon material-icons">bar_chart</span>
                    <span class="text">Charts</span>
                </a>
                <ul class="collapse" id="charts-menu">
                    <li>
                        <a href="apex-charts.html" class="___class_+?166___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">ApexCharts</span>
                        </a>
                    </li>
                    <li>
                        <a href="chart-js.html" class="___class_+?169___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Chart.js</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#maps-menu" data-toggle="collapse">
                    <span class="caret material-icons">arrow_right</span>
                    <span class="icon material-icons">map</span>
                    <span class="text">Maps</span>
                </a>
                <ul class="collapse" id="maps-menu">
                    <li>
                        <a href="google-maps.html" class="___class_+?176___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Google Maps</span>
                        </a>
                    </li>
                    <li>
                        <a href="vector-maps.html" class="___class_+?179___">
                            <span class="icon material-icons">remove</span>
                            <span class="text">Vector Maps</span>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
        <div class="navigation-arrow right">
            <i class="material-icons">chevron_right</i>
        </div>
    </nav>
</aside>
