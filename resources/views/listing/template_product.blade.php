<?php
$images = Helper::listing_get_feature_image($value->id);
if(isset($images)) {
    $image_url = '/searchmez/images/'.$value->listing.'/'.$images->name;
} else {
    $image_url = '';
}
?>
<div class="col-md-6 col-xl-4">
    <div class="card mb-3">
        <img class="card-img-top" src="<?php echo $image_url; ?>" alt="SearchmeZ">
        <div class="card-body">
            <h4 class="card-title"><?php echo $value->title; ?></h4>
            <p class="card-text">
                {{ Str::limit($value->description, 90) }}
            </p>
            <p class="card-text">
                <small class="text-muted">Last updated <?php echo $value->publishedAt; ?></small>
            </p>
        </div>
    </div>
</div>