<?php
/**
 * Big Features Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'big-features';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}


// Load values and assign defaults.
$align = get_field( 'alignment' );
$title = get_field( 'title' ) ?: 'Your title here...';
$description = get_field( 'description' );
$image = get_field('image');
$features = get_field('features');
?>

<div <?php echo $anchor; ?>class="<?php echo esc_attr( $class_name );?>">
    <div class="container <?php if ($align) echo " ".$align; ?>"> 
        <p class="section-title" ><?php echo esc_html( $title ); ?></p>
        <?php if ($description) { ?>
        <p class="section-description"><?php echo esc_html( $description ); ?></p>
        <?php } ?>
        <div class="features-content flex">
            <img src="<?php echo $image["url"]?>" alt="<?php echo $image["alt"]?>" class="features-image">
            <div class="features-list flex ">
                <?php foreach ($features as $feature) { ?>
                    <div class="feature flex">
                        <?php if ($feature['icon']) { ?>
                        <img src="<?php echo $feature['icon']['url']; ?>" alt="<?php echo $feature['icon']['url']; ?>" class="feature-icon">
                        <?php } ?>
                        <div class="feature-col">
                            <p class="feature-title"><?php echo $feature['title']; ?></p>
                            <p class="feature-description"><?php echo $feature['description']; ?></p>
                            <?php if ($feature['link']) { ?>
                            <a href="<?php echo $feature['link']['url']; ?>" class="feature-link" target="<?php if ($feature['link']['target']){ echo $feature['link']['target']; } else { echo '_self';} ?>" > <?php echo $feature['link']['title']; ?></a>
                            <?php } ?>    
                        </div>
                    </div>
                <?php } ?>    
            </div>
        </div>
        

        
       
    </div>
    
</div>