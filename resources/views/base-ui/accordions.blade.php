@extends('layouts.vertical', ["page_title"=> "Accordions"])

@section('content')
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>
                        <li class="breadcrumb-item active">Accordions</li>
                    </ol>
                </div>
                <h4 class="page-title">Accordions</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Simple Accordions</h4>
                    <p class="text-muted font-14 mb-3">
                        Using the card component, you can
                        extend the default collapse behavior to create an accordion. To properly achieve
                        the accordion style, be sure to use <code>.accordion</code> as a wrapper.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item" role="presentation">
                            <a href="#default-accordions-preview" class="nav-link active" data-bs-toggle="tab" role="tab" aria-controls="nav-preview" aria-selected="true">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#default-accordions-code" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="nav-code" aria-selected="false">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="default-accordions-preview">
                            <div class="accordion" id="accordionExample">
                                <div class="card mb-0">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="m-0">
                                            <a class="custom-accordion-title d-block pt-2 pb-2" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Collapsible Group Item #1
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                            sunt aliqua put a bird on it squid single-origin coffee
                                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                                            helvetica, craft beer labore wes anderson cred nesciunt
                                            sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim
                                            aesthetic synth nesciunt you probably haven't heard of them
                                            accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-0">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="m-0">
                                            <a class="custom-accordion-title collapsed d-block pt-2 pb-2" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Collapsible Group Item #2
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                            sunt aliqua put a bird on it squid single-origin coffee
                                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                                            helvetica, craft beer labore wes anderson cred nesciunt
                                            sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim
                                            aesthetic synth nesciunt you probably haven't heard of them
                                            accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-0">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="m-0">
                                            <a class="custom-accordion-title collapsed d-block pt-2 pb-2" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Collapsible Group Item #3
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                            sunt aliqua put a bird on it squid single-origin coffee
                                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                                            helvetica, craft beer labore wes anderson cred nesciunt
                                            sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim
                                            aesthetic synth nesciunt you probably haven't heard of them
                                            accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane" id="default-accordions-code">
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;accordion&quot; id=&quot;accordionExample&quot;&gt;
                                                            &lt;div class=&quot;card mb-0&quot;&gt;
                                                                &lt;div class=&quot;card-header&quot; id=&quot;headingOne&quot;&gt;
                                                                    &lt;h5 class=&quot;m-0&quot;&gt;
                                                                        &lt;a class=&quot;custom-accordion-title d-block pt-2 pb-2&quot;
                                                                            data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseOne&quot;
                                                                            aria-expanded=&quot;true&quot; aria-controls=&quot;collapseOne&quot;&gt;
                                                                            Collapsible Group Item #1
                                                                        &lt;/a&gt;
                                                                    &lt;/h5&gt;
                                                                &lt;/div&gt;
                                                        
                                                                &lt;div id=&quot;collapseOne&quot; class=&quot;collapse show&quot;
                                                                    aria-labelledby=&quot;headingOne&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;card mb-0&quot;&gt;
                                                                &lt;div class=&quot;card-header&quot; id=&quot;headingTwo&quot;&gt;
                                                                    &lt;h5 class=&quot;m-0&quot;&gt;
                                                                        &lt;a class=&quot;custom-accordion-title collapsed d-block pt-2 pb-2&quot;
                                                                            data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseTwo&quot;
                                                                            aria-expanded=&quot;false&quot; aria-controls=&quot;collapseTwo&quot;&gt;
                                                                            Collapsible Group Item #2
                                                                        &lt;/a&gt;
                                                                    &lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div id=&quot;collapseTwo&quot; class=&quot;collapse&quot; aria-labelledby=&quot;headingTwo&quot;
                                                                    data-bs-parent=&quot;#accordionExample&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;card mb-0&quot;&gt;
                                                                &lt;div class=&quot;card-header&quot; id=&quot;headingThree&quot;&gt;
                                                                    &lt;h5 class=&quot;m-0&quot;&gt;
                                                                        &lt;a class=&quot;custom-accordion-title collapsed d-block pt-2 pb-2&quot;
                                                                            data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseThree&quot;
                                                                            aria-expanded=&quot;false&quot; aria-controls=&quot;collapseThree&quot;&gt;
                                                                            Collapsible Group Item #3
                                                                        &lt;/a&gt;
                                                                    &lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div id=&quot;collapseThree&quot; class=&quot;collapse&quot;
                                                                    aria-labelledby=&quot;headingThree&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Custom Accordions</h4>
                    <p class="text-muted font-14 mb-3">
                        You can have custom look and feel for accorion as well. Just use class <code>.custom-accordion</code> along with
                        <code>.accordion</code> as a wrapper.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#custom-accordions-preview" class="nav-link active" data-bs-toggle="tab" role="tab" aria-controls="nav-preview" aria-selected="true">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#custom-accordions-code" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="nav-code" aria-selected="false">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="custom-accordions-preview">
                            <div class="accordion custom-accordion" id="custom-accordion-one">
                                <div class="card mb-0">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="m-0">
                                            <a class="custom-accordion-title d-block py-1" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                Q. Can I use this template for my client? <i class="mdi mdi-chevron-down accordion-arrow"></i>
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-bs-parent="#custom-accordion-one">
                                        <div class="card-body">
                                            Yup, the marketplace license allows you to use this theme
                                            in any end products.
                                            For more information on licenses, please refere <a href="https://themes.getbootstrap.com/licenses/">here</a>.
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-0">
                                    <div class="card-header" id="headingFive">
                                        <h5 class="m-0">
                                            <a class="custom-accordion-title collapsed d-block py-1" data-bs-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Q. Can this theme work with Wordpress? <i class="mdi mdi-chevron-down accordion-arrow"></i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#custom-accordion-one">
                                        <div class="card-body">
                                            No. This is a HTML template. It won't directly with
                                            wordpress, though you can convert this into wordpress
                                            compatible theme
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-0">
                                    <div class="card-header" id="headingSix">
                                        <h5 class="m-0">
                                            <a class="custom-accordion-title collapsed d-block py-1" data-bs-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Q. How do I get help with the theme? <i class="mdi mdi-chevron-down accordion-arrow"></i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-bs-parent="#custom-accordion-one">
                                        <div class="card-body">
                                            Use our dedicated support email (support@coderthemes.com) to
                                            send your issues or feedback. We are here to help anytime
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-0">
                                    <div class="card-header" id="headingSeven">
                                        <h5 class="m-0">
                                            <a class="custom-accordion-title collapsed d-block py-1" data-bs-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                Q. Will you regularly give updates of Hyper ? <i class="mdi mdi-chevron-down accordion-arrow"></i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-bs-parent="#custom-accordion-one">
                                        <div class="card-body">
                                            Yes, We will update the Hyper regularly. All the
                                            future updates would be available without any cost
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane" id="custom-accordions-code">
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;accordion custom-accordion&quot; id=&quot;custom-accordion-one&quot;&gt;
                                                            &lt;div class=&quot;card mb-0&quot;&gt;
                                                                &lt;div class=&quot;card-header&quot; id=&quot;headingFour&quot;&gt;
                                                                    &lt;h5 class=&quot;m-0&quot;&gt;
                                                                        &lt;a class=&quot;custom-accordion-title d-block py-1&quot;
                                                                            data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseFour&quot;
                                                                            aria-expanded=&quot;true&quot; aria-controls=&quot;collapseFour&quot;&gt;
                                                                            Q. Can I use this template for my client? &lt;i
                                                                                class=&quot;mdi mdi-chevron-down accordion-arrow&quot;&gt;&lt;/i&gt;
                                                                        &lt;/a&gt;
                                                                    &lt;/h5&gt;
                                                                &lt;/div&gt;
            
                                                                &lt;div id=&quot;collapseFour&quot; class=&quot;collapse show&quot;
                                                                    aria-labelledby=&quot;headingFour&quot;
                                                                    data-bs-parent=&quot;#custom-accordion-one&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;card mb-0&quot;&gt;
                                                                &lt;div class=&quot;card-header&quot; id=&quot;headingFive&quot;&gt;
                                                                    &lt;h5 class=&quot;m-0&quot;&gt;
                                                                        &lt;a class=&quot;custom-accordion-title collapsed d-block py-1&quot;
                                                                            data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseFive&quot;
                                                                            aria-expanded=&quot;false&quot; aria-controls=&quot;collapseFive&quot;&gt;
                                                                            Q. Can this theme work with Wordpress? &lt;i
                                                                                class=&quot;mdi mdi-chevron-down accordion-arrow&quot;&gt;&lt;/i&gt;
                                                                        &lt;/a&gt;
                                                                    &lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div id=&quot;collapseFive&quot; class=&quot;collapse&quot;
                                                                    aria-labelledby=&quot;headingFive&quot;
                                                                    data-bs-parent=&quot;#custom-accordion-one&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;card mb-0&quot;&gt;
                                                                &lt;div class=&quot;card-header&quot; id=&quot;headingSix&quot;&gt;
                                                                    &lt;h5 class=&quot;m-0&quot;&gt;
                                                                        &lt;a class=&quot;custom-accordion-title collapsed d-block py-1&quot;
                                                                            data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseSix&quot;
                                                                            aria-expanded=&quot;false&quot; aria-controls=&quot;collapseSix&quot;&gt;
                                                                            Q. How do I get help with the theme? &lt;i
                                                                                class=&quot;mdi mdi-chevron-down accordion-arrow&quot;&gt;&lt;/i&gt;
                                                                        &lt;/a&gt;
                                                                    &lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div id=&quot;collapseSix&quot; class=&quot;collapse&quot; aria-labelledby=&quot;headingSix&quot;
                                                                    data-bs-parent=&quot;#custom-accordion-one&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;card mb-0&quot;&gt;
                                                                &lt;div class=&quot;card-header&quot; id=&quot;headingSeven&quot;&gt;
                                                                    &lt;h5 class=&quot;m-0&quot;&gt;
                                                                        &lt;a class=&quot;custom-accordion-title collapsed d-block py-1&quot;
                                                                            data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseSeven&quot;
                                                                            aria-expanded=&quot;false&quot; aria-controls=&quot;collapseSeven&quot;&gt;
                                                                            Q. Will you regularly give updates of Hyper ? &lt;i
                                                                                class=&quot;mdi mdi-chevron-down accordion-arrow&quot;&gt;&lt;/i&gt;
                                                                        &lt;/a&gt;
                                                                    &lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div id=&quot;collapseSeven&quot; class=&quot;collapse&quot;
                                                                    aria-labelledby=&quot;headingSeven&quot;
                                                                    data-bs-parent=&quot;#custom-accordion-one&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

    </div>
    <!-- end row-->


    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Collapse</h4>
                    <p class="text-muted font-14 mb-3">
                        Bootstrap's collapse provides the way to toggle the visibility of any content or element.
                        Please read the official <a href="https://getbootstrap.com/docs/4.3/components/collapse/" target="_blank">Bootstrap</a>
                        documentation for a full list of options.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#collapse-preview" class="nav-link active" data-bs-toggle="tab" role="tab" aria-controls="nav-preview" aria-selected="true">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#collapse-code" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="nav-code" aria-selected="false">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="collapse-preview">
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Link with href
                                </a>
                                <button class="btn btn-primary ms-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Button with data-bs-target
                                </button>
                            </p>
                            <div class="collapse show" id="collapseExample">
                                <div class="card card-body mb-0">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry
                                    richardson ad squid. Nihil anim keffiyeh helvetica, craft beer
                                    labore wes
                                    anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane" id="collapse-code">
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;p&gt;
                                                            &lt;a class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;collapse&quot;
                                                                href=&quot;#collapseExample&quot; aria-expanded=&quot;false&quot;
                                                                aria-controls=&quot;collapseExample&quot;&gt;
                                                                Link with href
                                                            &lt;/a&gt;
                                                            &lt;button class=&quot;btn btn-primary ms-1&quot; type=&quot;button&quot;
                                                                data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseExample&quot;
                                                                aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
                                                                Button with data-bs-target
                                                            &lt;/button&gt;
                                                        &lt;/p&gt;
                                                        &lt;div class=&quot;collapse show&quot; id=&quot;collapseExample&quot;&gt;
                                                            &lt;div class=&quot;card card-body mb-0&quot;&gt;
                                                                ...
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Multiple Targets</h4>
                    <p class="text-muted font-14 mb-3">
                        Multiple <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> can show and hide an element if
                        they each reference it with their <code>href</code> or <code>data-bs-target</code> attribute
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#multiple-targets-preview" class="nav-link active" data-bs-toggle="tab" role="tab" aria-controls="nav-preview" aria-selected="true">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#multiple-targets-code" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="nav-code" aria-selected="false">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="multiple-targets-preview">
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                            </p>
                            <div class="row">
                                <div class="col">
                                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                                        <div class="card card-body mb-0">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="collapse multi-collapse" id="multiCollapseExample2">
                                        <div class="card card-body mb-0">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row-->
                        </div> <!-- end preview-->

                        <div class="tab-pane" id="multiple-targets-code">
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;p&gt;
                                                            &lt;a class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;collapse&quot; href=&quot;#multiCollapseExample1&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample1&quot;&gt;Toggle first element&lt;/a&gt;
                                                            &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#multiCollapseExample2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample2&quot;&gt;Toggle second element&lt;/button&gt;
                                                            &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;.multi-collapse&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample1 multiCollapseExample2&quot;&gt;Toggle both elements&lt;/button&gt;
                                                        &lt;/p&gt;
                                                        &lt;div class=&quot;row&quot;&gt;
                                                            &lt;div class=&quot;col&quot;&gt;
                                                                &lt;div class=&quot;collapse multi-collapse&quot; id=&quot;multiCollapseExample1&quot;&gt;
                                                                    &lt;div class=&quot;card card-body mb-0&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;col&quot;&gt;
                                                                &lt;div class=&quot;collapse multi-collapse&quot; id=&quot;multiCollapseExample2&quot;&gt;
                                                                    &lt;div class=&quot;card card-body mb-0&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt; &lt;!-- end col --&gt;
                                                        &lt;/div&gt; &lt;!-- end row--&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->

</div> <!-- container -->
@endsection