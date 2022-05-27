<?php

$url = explode("/", $_SERVER['REQUEST_URI']);

// if ($url[2] == "account") {
   // echo "<style>header .container{min-width:100%}</style>";
// }

?>

<aside class="sidebar x-none">
    <div class="side-menu bg-wh" role="navigation">
<ul class="nav__list">
    <li class="main dashboard">
        <script>$(".dashboard").click (function(e){e.preventDefault();window.location.href = "<?=root?>dashboard";})</script>
         <input id="group-d" type="checkbox" hidden="" <?php if (end($url) == "dashboard" ) {echo "checked";}?>>
        <label for="group-d">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c-6.627 0-12 5.373-12 12 0 2.583.816 5.042 2.205 7h19.59c1.389-1.958 2.205-4.417 2.205-7 0-6.627-5.373-12-12-12zm-.758 2.14c.256-.02.51-.029.758-.029s.502.01.758.029v3.115c-.252-.027-.506-.042-.758-.042s-.506.014-.758.042v-3.115zm-5.763 7.978l-2.88-1.193c.157-.479.351-.948.581-1.399l2.879 1.192c-.247.444-.441.913-.58 1.4zm1.216-2.351l-2.203-2.203c.329-.383.688-.743 1.071-1.071l2.203 2.203c-.395.316-.754.675-1.071 1.071zm.793-4.569c.449-.231.919-.428 1.396-.586l1.205 2.875c-.485.141-.953.338-1.396.585l-1.205-2.874zm1.408 13.802c.019-1.151.658-2.15 1.603-2.672l1.501-7.041 1.502 7.041c.943.522 1.584 1.521 1.603 2.672h-6.209zm4.988-11.521l1.193-2.879c.479.156.948.352 1.399.581l-1.193 2.878c-.443-.246-.913-.44-1.399-.58zm2.349 1.217l2.203-2.203c.383.329.742.688 1.071 1.071l-2.203 2.203c-.316-.396-.675-.755-1.071-1.071zm2.259 3.32c-.147-.483-.35-.95-.603-1.39l2.86-1.238c.235.445.438.912.602 1.39l-2.859 1.238z"></path></svg>
            <strong>Dashboard</strong>
        </label>
    </li>
    <li class="main">
        <input id="group-1" type="checkbox" hidden="" <?php if (end($url) == "stores" || end($url) == "warehouses" || end($url) == "domains" || end($url) == "brands" ) {echo "checked";}?>>
        <label for="group-1">
            <span>
                <svg class="svg-icon" viewBox="0 0 20 20">
                    <path fill="none" d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path>
                </svg>
            </span>
            <svg width="24" height="24" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 482.2 482.2" style="enable-background:new 0 0 482.2 482.2;" xml:space="preserve"> <g> <g> <path d="M432.6,205.5c-5-27.4-15.7-52.7-30.9-74.8l29.6-40.1l-11.9-11.9l-16.1-16.1l-11.9-11.9l-40,29.5 c-22.1-15.2-47.5-26-74.9-31.1l-7.3-49h-16.8h-22.8h-16.8l-7.4,49.1c-27.4,5.1-52.8,15.9-74.9,31.1l-40-29.5L78.7,62.6L62.5,78.8 L50.6,90.7l29.6,40.1c-15.1,22.1-25.9,47.4-30.9,74.8L0,212.9v16.8v22.8v16.8l49.5,7.5c5.1,27.2,15.8,52.4,31,74.4l-29.8,40.4 l11.9,11.9l16.1,16.1l11.9,11.9l40.5-29.9c21.9,15,47.1,25.7,74.3,30.7l7.5,49.8h16.8h22.8h16.8l7.5-49.8 c27.2-5,52.3-15.7,74.3-30.7l40.5,29.9l11.9-11.9l16.1-16.1l11.9-11.9l-29.8-40.4c15.1-22,25.9-47.2,31-74.4l49.5-7.5v-16.8v-22.8 v-16.8L432.6,205.5z M241,395.1c-85,0-154-68.9-154-154c0-85,68.9-154,154-154c85,0,154,68.9,154,154 C395,326.1,326,395.1,241,395.1z"/> <path d="M325.9,286.8c-26.3-6.7-47.6-21.7-47.6-21.7l-16.7,52.7l-3.1,9.9v-0.1l-2.7,8.4l-8.8-24.9c22.2-31-5.9-29.8-5.9-29.8 s-28.1-1.2-5.9,29.8l-8.9,25.1l-2.7-8.5l-19.8-62.6c0,0-21.4,15-47.6,21.7c-13.1,3.3-17.9,14.5-19.3,24.9 c23.6,32.4,61.6,52.7,103.9,52.7c9.7,0,19.4-1.1,29-3.3c30.7-7.1,57.2-24.7,75.5-50C343.6,300.9,338.8,290.1,325.9,286.8z"/> <path d="M196.9,230.2c2.3,14.7,13.6,33.4,32.2,39.9c7.6,2.7,16,2.7,23.6,0c18.3-6.6,30-25.2,32.3-39.9c2.5-0.2,5.7-3.7,9.2-16 c4.8-16.9-0.3-19.4-4.6-19c0.8-2.3,1.4-4.6,1.9-6.9c7.3-43.8-14.3-45.3-14.3-45.3s-3.6-6.9-13-12.1c-6.3-3.7-15.1-6.6-26.7-5.6 c-3.7,0.2-7.3,0.9-10.6,2l0,0c-4.3,1.4-8.2,3.5-11.7,6c-4.3,2.7-8.4,6.1-12,9.9c-5.7,5.8-10.8,13.4-13,22.8 c-1.8,7-1.4,14.4,0.1,22.3l0,0c0.4,2.3,1,4.6,1.9,6.9c-4.3-0.4-9.4,2.1-4.6,19C191.2,226.5,194.5,230,196.9,230.2z"/> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c-6.627 0-12 5.373-12 12 0 2.583.816 5.042 2.205 7h19.59c1.389-1.958 2.205-4.417 2.205-7 0-6.627-5.373-12-12-12zm-.758 2.14c.256-.02.51-.029.758-.029s.502.01.758.029v3.115c-.252-.027-.506-.042-.758-.042s-.506.014-.758.042v-3.115zm-5.763 7.978l-2.88-1.193c.157-.479.351-.948.581-1.399l2.879 1.192c-.247.444-.441.913-.58 1.4zm1.216-2.351l-2.203-2.203c.329-.383.688-.743 1.071-1.071l2.203 2.203c-.395.316-.754.675-1.071 1.071zm.793-4.569c.449-.231.919-.428 1.396-.586l1.205 2.875c-.485.141-.953.338-1.396.585l-1.205-2.874zm1.408 13.802c.019-1.151.658-2.15 1.603-2.672l1.501-7.041 1.502 7.041c.943.522 1.584 1.521 1.603 2.672h-6.209zm4.988-11.521l1.193-2.879c.479.156.948.352 1.399.581l-1.193 2.878c-.443-.246-.913-.44-1.399-.58zm2.349 1.217l2.203-2.203c.383.329.742.688 1.071 1.071l-2.203 2.203c-.316-.396-.675-.755-1.071-1.071zm2.259 3.32c-.147-.483-.35-.95-.603-1.39l2.86-1.238c.235.445.438.912.602 1.39l-2.859 1.238z"></path></svg> -->
            <strong>Settings</strong>
        </label>
        <ul class="menu-list">
            <li><a class="<?php if (end($url) == "stores") {echo "active";}?>" href="<?=root?>account/stores">Stores</a></li>
            <li><a class="<?php if (end($url) == "brands") {echo "active";}?>" href="<?=root?>account/brands">Brands</a></li>
            <li><a class="<?php if (end($url) == "warehouses") {echo "active";}?>" href="<?=root?>account/warehouses">Warehouses</a></li>
            <li><a class="<?php if (end($url) == "domains") {echo "active";}?>" href="<?=root?>account/domains">Domains</a></li>
        </ul>
    </li>
    <li class="main">
        <input id="group-3" type="checkbox" hidden="" <?php if (end($url) == "products" || end($url) == "inventory" || end($url) == "categories" ) {echo "checked";}?> >
        <label for="group-3">
            <span>
                <svg class="svg-icon" viewBox="0 0 20 20">
                    <path fill="none" d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path>
                </svg>
            </span>
            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M1 12.155c2.256 3.97 4.55 7.918 6.879 11.845h-5.379c-.829 0-1.5-.675-1.5-1.5v-10.345zm2.85.859c3.278 1.952 12.866 7.658 13.121 7.805l-5.162 2.98c-.231.132-.49.201-.751.201-.549 0-1.037-.298-1.299-.75l-5.909-10.236zm1.9-12.813c-.23-.133-.489-.201-.75-.201-.524 0-1.026.277-1.299.75l-3.5 6.062c-.133.23-.201.489-.201.749 0 .527.278 1.028.75 1.3 2.936 1.695 14.58 8.7 17.516 10.396.718.413 1.633.168 2.048-.55l3.5-6.062c.133-.23.186-.488.186-.749 0-.52-.257-1.025-.734-1.3l-17.516-10.395m.25 3.944c1.104 0 2 .896 2 2s-.896 2-2 2-2-.896-2-2 .896-2 2-2"></path></svg>
            <strong> Products</strong>
        </label>
        <ul class="menu-list">
            <li>
            <li><a class="<?php if (end($url) == "products") {echo "active";}?>" href="<?=root?>account/products">Products</a></li>
            <li><a class="<?php if (end($url) == "categories") {echo "active";}?>" href="<?=root?>account/categories">Categories</a></li>
            <li><a class="<?php if (end($url) == "inventory") {echo "active";}?>" href="<?=root?>account/inventory">Inventory</a></li>
        </ul>
    </li>
    <li class="main">
        <input id="group-5" type="checkbox" hidden="">
        <label for="group-5">
            <span>
                <svg class="svg-icon" viewBox="0 0 20 20">
                    <path fill="none" d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path>
                </svg>
            </span>
            <svg width="24" height="24" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <path d="M12 6v-6h-8v6h-4v7h16v-7h-4zM7 12h-6v-5h2v1h2v-1h2v5zM5 6v-5h2v1h2v-1h2v5h-6zM15 12h-6v-5h2v1h2v-1h2v5z"></path> <path d="M0 16h3v-1h10v1h3v-2h-16v2z"></path> </svg>
        <strong>Stocks </strong>
        </label>
        <ul class="menu-list">
            <li>
            </li><li><a href="#">1st level item</a></li>

        </ul>
    </li>

    <li class="main">
        <input id="group-4" type="checkbox" hidden="">
        <label for="group-4">
            <span>
                <svg class="svg-icon" viewBox="0 0 20 20">
                    <path fill="none" d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path>
                </svg>
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13.747 12.795l9.253 4.58-3.453 1.32 3.145 4.039-1.547 1.266-3.204-4.104-2.121 3.009-2.073-10.11zm-.747-2.795c0-1.104-.895-2-2-2s-2 .896-2 2 .895 2 2 2 2-.896 2-2zm-2-6c-3.314 0-6 2.686-6 6s2.686 6 6 6c.458 0 .902-.056 1.331-.153l-.403-1.966c-.299.071-.607.119-.928.119-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4c0 .384-.071.747-.173 1.099l1.824.902c.222-.626.349-1.298.349-2.001 0-3.314-2.686-6-6-6zm1.733 13.806c-.559.124-1.137.194-1.733.194-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8c0 1.021-.199 1.994-.549 2.892l1.803.892c.478-1.168.746-2.444.746-3.784 0-5.523-4.477-10-10-10s-10 4.477-10 10 4.477 10 10 10c.733 0 1.446-.084 2.135-.234l-.402-1.96z"></path></svg>
            <strong>Marketing</strong>
        </label>
        <ul class="menu-list">
            <li><a href="./components-skeleton">Skeleton</a></li>
            <li><a href="indicators-progress">Progress Bar</a></li>
            <li><a href="./components-linear">Linear</a></li>
        </ul>
    </li>

    <li class="main pos">
    <script>$(".pos").click (function(e){e.preventDefault();window.location.href = "<?=root?>pos";})</script>
        <input id="eCommerce" type="checkbox" hidden="" <?php if (end($url) == "pos" ) {echo "checked";}?>>
        <label for="eCommerce">
            <!-- <span>
                <svg class="svg-icon" viewBox="0 0 20 20">
                    <path fill="none" d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path>
                </svg>
            </span> -->
            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M17 16h-4v8h-2v-8h-4l5-6 5 6zm7 8h-9v-2h7v-16h-20v16h7v2h-9v-24h24v24z"></path></svg>
            <strong>POS</strong>
        </label>
    </li>

    <li class="main">
        <input id="group-6" type="checkbox" hidden="">
        <label for="group-6">
            <span>
                <svg class="svg-icon" viewBox="0 0 20 20">
                    <path fill="none" d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path>
                </svg>
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M14.568.075c2.202 1.174 5.938 4.883 7.432 6.881-1.286-.9-4.044-1.657-6.091-1.179.222-1.468-.185-4.534-1.341-5.702zm7.432 10.925v13h-20v-24h8.409c4.857 0 3.335 8 3.335 8 3.009-.745 8.256-.419 8.256 3zm-16 5h5v-4h-5v4zm12 2h-12v1h12v-1zm0-3h-5v1h5v-1zm0-3h-5v1h5v-1z"></path></svg>
            <strong> Reports </strong>
        </label>
        <ul class="menu-list">
            <li>
            </li><li><a href="#">1st level item</a></li>
            <input id="sub-group-3" type="checkbox" hidden="">
            <label for="sub-group-3">
                <span>
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path fill="none" d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path>
                    </svg>
                </span>
                Second level
            </label>
            <ul class="sub-menu-list">
                <li><a href="#">2nd level nav item</a></li>
                <li><a href="#">2nd level nav item</a></li>
                <li><a href="#">2nd level nav item</a></li>
                <li>
                    <input id="sub-sub-group-3" type="checkbox" hidden="">
                    <label for="sub-sub-group-3">
                        <span>
                            <svg class="svg-icon" viewBox="0 0 20 20">
                                <path fill="none" d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path>
                            </svg>
                        </span>
                        Third level
                    </label>
                    <ul class="sub-sub-menu-list">
                        <li><a href="#">3rd level nav item</a></li>
                        <li><a href="#">3rd level nav item</a></li>
                        <li><a href="#">3rd level nav item</a></li>
                    </ul>
                </li>
            </ul>

        </ul>
    </li>
</ul>
</div>
<style class="ng-scope">
footer{display:none}
</style></aside>

<style>
    .pages_links { display: none }
    body { overflow-y: hidden; /* Hide vertical scrollbar */ }
</style>