<style>

#faq {
    position: relative;
    .top-svg {
        fill: <?php echo $faq_top_svg_color; ?>;
    }
    .bottom-svg {
        fill: <?php echo $faq_bottom_svg_color; ?>;
    }
    background-repeat: no-repeat;
    background-size: cover;
    background-color: <?php echo $faq_bg_color; ?>;
    <?php if (!empty($faq_bg_image)) : ?>
        background-image: url('<?php echo $faq_bg_image; ?>');
    <?php endif; ?>
    
}

.faq_section * {
    box-sizing: border-box;
}
.faq_section *::before, *::after {
    box-sizing: border-box;
}
.faq_section.container {
    margin: 0 auto;
    width: 48rem;
    h2 {
        color: <?php echo $faq_title_color; ?>;
    }
}
.faq_section .accordion .accordion-item {
    border: unset;
    background-color: transparent;
    border-radius: unset;
}
.faq_section .accordion .accordion-item {
    border-bottom: 1px solid #e5e5e5;
}
.faq_section .accordion .accordion-item button[aria-expanded='true'] {
    border-bottom: 1px solid <?php echo $faq_question_hover_color; ?>;
}
.faq_section .accordion button {
    position: relative;
    display: block;
    text-align: left;
    width: 100%;
    padding: 1em 0;
    color: <?php echo $faq_text_color; ?>;
    font-size: 1.15rem;
    font-weight: 400;
    border: none;
    background: none;
    outline: none;
}
.faq_section .accordion button:hover, .accordion button:focus {
    cursor: pointer;
    color: <?php echo $faq_question_hover_color; ?>;
}
.faq_section .accordion button:hover::after, .accordion button:focus::after {
    cursor: pointer;
    color: <?php echo $faq_question_hover_color; ?>;
    border: 1px solid <?php echo $faq_question_hover_color; ?>;
}
.faq_section .accordion button .accordion-title {
    padding: 1em 1.5em 1em 0;
}
.faq_section .accordion button .icon {
    display: inline-block;
    position: absolute;
    top: 18px;
    right: 0;
    width: 22px;
    height: 22px;
    border: 1px solid;
    border-radius: 22px;
}
.faq_section .accordion button .icon::before {
    display: block;
    position: absolute;
    content: '';
    top: 9px;
    left: 5px;
    width: 10px;
    height: 2px;
    background: currentColor;
}
.faq_section .accordion button .icon::after {
    display: block;
    position: absolute;
    content: '';
    top: 5px;
    left: 9px;
    width: 2px;
    height: 10px;
    background: currentColor;
}
.faq_section .accordion button[aria-expanded='true'] {
    color: <?php echo $faq_question_hover_color; ?>;
}
.faq_section .accordion button[aria-expanded='true'] .icon::after {
    width: 0;
}
.faq_section .accordion button[aria-expanded='true'] + .accordion-content {
    opacity: 1;
    max-height: fit-content;
    transition: all 200ms linear;
    will-change: opacity, max-height;
}
.faq_section .accordion .accordion-content {
    opacity: 0;
    max-height: 0;
    overflow: hidden;
    transition: opacity 200ms linear, max-height 200ms linear;
    will-change: opacity, max-height;
}
.faq_section .accordion .accordion-content p {
    font-size: 1rem;
    font-weight: 300;
    margin: 2em 0;
    color: <?php echo $faq_question_hover_color; ?>;
}

@media (max-width: 767px) {
    .faq_section .accordion button .accordion-title {
        display: block;
        width: 95%;
        padding: 0;
    }
    .faq_section.container {
        width: 100%;
    }
}

</style>
<div id="faq-section" class="faq_section container all-section-style">

  <h2 class="title-h1 text-center"><?php echo $faq_title; ?></h2>
  <div class="accordion">
    <?php $br=1; foreach ($faq_array as $faq) : ?>
        <div class="accordion-item">
            <button id="accordion-button-<?php echo $br++; ?>" aria-expanded="false"><span class="accordion-title"><?php echo $faq["question"] ?></span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
                <p><?php echo $faq["answer"] ?></p>
            </div>
        </div>
    <?php endforeach; ?>
  </div>

</div>

<?php

$javaScripts[] = <<<JS

    const items = document.querySelectorAll(".accordion button");

    function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');
    
    for (i = 0; i < items.length; i++) {
        items[i].setAttribute('aria-expanded', 'false');
    }
    
    if (itemToggle == 'false') {
        this.setAttribute('aria-expanded', 'true');
    }
    }

    items.forEach(item => item.addEventListener('click', toggleAccordion));

JS;

?>