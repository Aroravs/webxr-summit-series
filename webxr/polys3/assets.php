





<a-asset-item id="platform" response-type="arraybuffer" position="0 0 -5" src="/assets/models/2022Summits/9SidedPlatform.glb">
</a-asset-item>
<a-asset-item id="brandtownhall" response-type="arraybuffer" src="/assets/models/2022Summits/2022_WebXR_Brand_Summit_TownHall_Long.glb"></a-asset-item>
<a-asset-item id="emblem" response-type="arraybuffer" src="/assets/models/emblem2022.glb"></a-asset-item>
<a-asset-item id="chair" response-type="arraybuffer" src="/assets/models/chair.glb"></a-asset-item>






<a-asset-item id="The3rdPolysLogo" response-type="arraybuffer" src="/assets/models/polys/3rd/The_3rd_Polys_Zerospace.glb"></a-asset-item>
<a-asset-item id="ring" response-type="arraybuffer" position="0 0 -5" src="/assets/models/polys/newring3.glb">
<!--
<a-asset-item id="22SummitsSquare" response-type="arraybuffer" src="/assets/models/2022Summits/2022WebXRSummitSeriesSquare.glb"></a-asset-item>-->
<!--LIST OF ASSETS GENERATED BY MENU-->
<!--
<a-asset-item id="2nd-polys-trophy" response-type="arraybuffer" src="/assets/models/polys/trophies/2021-Poly.glb"></a-asset-item>
-->
<?php if(@$_GET['leadsponsor']){

?>
<a-asset-item id="lead-sponsor" response-type="arraybuffer" src="/assets/models/sponsors/<?=$_GET['leadsponsor']?>.glb"></a-asset-item>
<?php
}
?>
<?php
    if(@$_GET['skybox']){
        ?>
        <img id="sky" src="/assets/images/skybox/<?=$_GET['skybox']?>.jpg">

   
    <?php
    } else {


    $skybox_id = get_post_meta($post->ID,"skybox",true);
    //var_dump($skybox_id);
   $skybox = str_replace("-scaled","",getThumbnail($skybox_id));
   if($skybox_id != ""){

?>
   <img id="sky" src="<?=$skybox?>">
<?php
    } else {
        ?>
        <img id="sky" src="/wp-content/uploads/2022/11/skyboxTemplate-Red6k.jpg">
   <?php
    }
}//no blue or greenscreen


   if(@$assets3D){// this var is created in panels.php
    foreach($assets3D as $key => $asset3D){
        ?>
<!-- ASSET <?=$asset3D['slug']?> -->
    <a-asset-item id="<?=$asset3D['slug']?>-logo3D" response-type="arraybuffer" src="<?=$asset3D['asset']?>"></a-asset-item>

            <?php
        }
    }

    ?>




<?php
    if(is_array(@$assets)){
        foreach($assets as $key => $asset){
         extract($asset);
            ?>
<a-asset-item id="<?=$slug?>" response-type="arraybuffer" src="<?=$path?>"></a-asset-item>
            <?php
        }
    }
?>

<?php
 $trophy = '2022-Poly-hosts';//default
 if(@$_GET['trophy']){
     $trophy = @$_GET['trophy'];
 }
?>

<a-asset-item id="trophy" response-type="arraybuffer" src="/assets/models/polys/3rd/<?=$trophy?>.glb"></a-asset-item>





<a-asset-item id="pedestal" response-type="arraybuffer" src="/assets/models/polys/pedestal.glb"></a-asset-item>

<!--logos-->

<a-asset-item id="futurewei" response-type="arraybuffer" src="/assets/models/polys/Logo_Futurewei.glb"></a-asset-item>
<a-asset-item id="powersimple" response-type="arraybuffer" src="/assets/models/polys/Logo_Powersimple.glb"></a-asset-item>
<a-asset-item id="metavrse" response-type="arraybuffer" src="/assets/models/polys/Logo_MetaVRse.glb"></a-asset-item>
<a-asset-item id="point-cloud" response-type="arraybuffer" src="/assets/models/polys/a-point-cloud-production.glb"></a-asset-item>
<a-asset-item id="threelbxr" response-type="arraybuffer" src="/assets/models/polys/3rd/3lbxr.glb"></a-asset-item>
<a-asset-item id="vartisans" response-type="arraybuffer" src="/assets/models/polys/3rd/vartisans.glb"></a-asset-item>
<a-asset-item id="xrwomen" response-type="arraybuffer" src="/assets/models/partners/XRWomen.glb"></a-asset-item>
<a-asset-item id="cause-christi" response-type="arraybuffer" src="/assets/models/polys/3rd/causechristi.glb"></a-asset-item>
<a-asset-item id="vrm" response-type="arraybuffer" src="/assets/models/polys/3rd/vrm.glb"></a-asset-item>