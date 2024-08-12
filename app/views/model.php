<main>
    <div class="row m-0">
        <div class="col-lg-5 col-md-12 pt-3 row-gap-2">
            <div class="row">
                <h3 class="text-center m-0 fst-italic border-bottom"><span class="text-danger">CocaCola</span> Brands</h3>
                <?php
                    $models = [
                        ['name' => 'Type 1', 'image' => 'home_tag1.png', 'link' => 'cola1', 'kind' => 'Cola1'],
                        ['name' => 'Type 2', 'image' => 'home_tag2.png', 'link' => 'cola2', 'kind' => 'Cola2'],
                        ['name' => 'Type 3', 'image' => 'home_tag3.png', 'link' => 'cola3', 'kind' => 'Cola3'],
                        ['name' => 'Type 4', 'image' => 'home_tag4.png', 'link' => 'cola4', 'kind' => 'Cola4'],
                        ['name' => 'Type 5', 'image' => 'home_tag2.png', 'link' => 'cola5', 'kind' => 'Cola5'],
                        ['name' => 'Type 6', 'image' => 'home_tag3.png', 'link' => 'cola6', 'kind' => 'Cola6']
                    ];

                    foreach ($models as $model) {
                        echo '<div class="col-4 d-flex justify-content-center">';
                        if($data['subtitle'] == $model['kind'])
                            echo '<div class="model-container active">';
                        else
                            echo '<div class="model-container">';
                        echo '<div class="model-image-container">';
                        echo '<a href="' . LINKURL . '/models/' . $model['link'] . '">';
                        echo '<img src="' . BASEURL . '/public/images/' . $model['image'] . '" class="model-image"/>';
                        echo '</a>';
                        echo '</div>';
                        echo '<a href="' . LINKURL . '/models/' . $model['link'] . '">';
                        echo '<div class="model-title">';
                        echo '<h4 class="m-0">' . $model['name'] . '</h4>';
                        echo '</div>';
                        echo '</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                ?>
            </div>
            <div class="row">
                <h3 class="text-center m-0 fst-italic border-bottom"><span class="text-danger">Other</span> Brands</h3>
                <?php
                    $models = [
                        ['name' => 'Juice', 'image' => 'home_tag2.png', 'link' => 'juice'],
                        ['name' => 'Water', 'image' => 'home_tag3.png', 'link' => 'water'],
                        ['name' => 'Pepsi', 'image' => 'home_tag1.png', 'link' => 'pepsi',],
                        ['name' => 'Fanta', 'image' => 'home_tag2.png', 'link' => 'fanta'],
                        ['name' => 'Soda', 'image' => 'home_tag4.png', 'link' => 'soda']
                    ];

                    foreach ($models as $model) {
                        echo '<div class="col-4 d-flex justify-content-center">';
                        if($data['subtitle'] == $model['name'])
                            echo '<div class="model-container active">';
                        else
                            echo '<div class="model-container">';
                        echo '<div class="model-image-container">';
                        echo '<a href="' . LINKURL . '/models/' . $model['link'] . '">';
                        echo '<img src="' . BASEURL . '/public/images/' . $model['image'] . '" class="model-image"/>';
                        echo '</a>';
                        echo '</div>';
                        echo '<a href="' . LINKURL . '/models/' . $model['link'] . '">';
                        echo '<div class="model-title">';
                        echo '<h4 class="m-0">' . $model['name'] . '</h4>';
                        echo '</div>';
                        echo '</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 p-4">
            <div class="row position-relative">
                <button type="button" onclick="aboutMore('<?=$data['subtitle']?>');" class="btn btn-success left-button">Learn More</button>
                <button type="button" onclick="animateModel();" class="btn btn-info right-button rounded-3">Click Obj</button>
                <div class="rounded-4 shadow">
                    <x3d width='100%' height='400px' id="wire">
                        <scene>
                            <transform DEF="ball">
                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="<?= BASEURL ?>/public/x3ds/<?= $data['model'] ?>" > </inline>
                            </transform>
                            <!-- <OrientationInterpolator DEF="SpinBody" key="0 0.5 1" keyValue="0 1 0 0 0 1 0 3.14 1 0 0 0"/>
                            <TimeSensor DEF="Clock" cycleInterval="10" loop="true"/>
                            <ROUTE fromNode="Clock" fromField="fraction_changed" toNode="SpinBody" toField="set_fraction"/>
                            <ROUTE fromNode="SpinBody" fromField="value_changed" toNode="ball" toField="set_rotation"/> -->
                        </scene>
                    </x3d>
                </div>
                <div class="border-top m-2 d-none" id="result-container"></div>
            </div> 
        </div>
        <div class="col-lg-2 col-md-12 py-4 row m-0 row-gap-2">
            <div class="col-lg-12 col-md-9">
                <div class="border shadow rounded-3 h-100">
                    <h5 class="text-danger text-center py-2 border-bottom m-0">Camera Setting</h5>
                    <div class="row m-0">
                        <div class="col-lg-12 col-md-2 col-sm-4 col-xs-6 p-1 text-center">
                            <div class="shadow rounded-2 border cameras active-camera" id="front" style="cursor: pointer;" onclick="cameraFront();">Front</div>
                        </div>
                        <div class="col-lg-12 col-md-2 col-sm-4 col-xs-6 p-1 text-center">
                            <div class="shadow rounded-2 border cameras" id="back" style="cursor: pointer;" onclick="cameraBack();">Back</div>
                        </div>
                        <div class="col-lg-12 col-md-2 col-sm-4 col-xs-6 p-1 text-center">
                            <div class="shadow rounded-2 border cameras" id="top" style="cursor: pointer;" onclick="cameraTop();">Top</div>
                        </div>
                        <div class="col-lg-12 col-md-2 col-sm-4 col-xs-6 p-1 text-center">
                            <div class="shadow rounded-2 border cameras" id="bottom" style="cursor: pointer;" onclick="cameraBottom();">Bottom</div>
                        </div>
                        <div class="col-lg-12 col-md-2 col-sm-4 col-xs-6 p-1 text-center">
                            <div class="shadow rounded-2 border cameras" id="left" style="cursor: pointer;" onclick="cameraLeft();">Left</div>
                        </div>
                        <div class="col-lg-12 col-md-2 col-sm-4 col-xs-6 p-1 text-center">
                            <div class="shadow rounded-2 border cameras" id="right" style="cursor: pointer;" onclick="cameraRight();">Right</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-3">
                <div class="border shadow rounded-3 h-100 d-flex flex-column">
                    <h5 class="text-danger text-center py-2 border-bottom m-0">Wire Mode</h5>
                    <div class="d-flex h-100 justify-content-center align-items-center gap-2">
                        <h6 class="m-0">On</h6>
                        <div id="slider-container" onclick="toggleWireMode()">
                            <div id="slider"></div>
                        </div>
                        <h6 class="m-0">Off</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>