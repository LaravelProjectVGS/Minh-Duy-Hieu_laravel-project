@extends('blogVgs')

@section('createBlog')
    <div class="body-right">
        <div class="tab_panel container">
            <div class="title">Panel form fields</div>
            <div class="tabs-top">
                <div class="tab">
                    <div class="open" style="display: flex;">
                        <img srcset="/open.png 2x" alt="">
                        Open
                    </div>
                    <div class="unlisted" style="display: flex;">
                        <img srcset="/circle_half.png 2x" alt="">
                        Unlisted
                    </div>
                    <div class="settings" style="display: flex;">
                        <img srcset="/cog.png 2x" alt="">
                        Settings
                    </div>
                </div>

                <div class="arrows">
                    <i class="fa-solid fa-angle-left"></i>
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>

            <div class="row options">
                <!-- Tab links -->
                <div class="tab">
                    <button class="tablinks chose" onclick="openCity(event, 'London')" style="display: flex;"><img
                            srcset="Vector.png 2x" alt="">
                        CONTENT</button>
                    <button class="tablinks" onclick="openCity(event, 'Paris')" style="display: flex;"><img
                            srcset="cog.png 2x" alt="">
                        SETTINGS</button>
                </div>

                <!-- Tab content -->
                <div id="London" class="row tabcontent d-flex" style="margin: 0 auto;">
                    <!-- noi dung content -->
                    <div class="col-12 col-md-6 left">
                        <div class="check-box">
                            <span>Checkboxes</span>
                            <div class="item-check_box">
                                <div class="item-check">
                                    <input type="checkbox" id="item1" value="OptionA">
                                    <label for="item1">Option A</label><br>
                                </div>
                                <div class="item-check">
                                    <input type="checkbox" id="item2" value="OptionB">
                                    <label for="item2">Option B</label><br>
                                </div>

                                <div class="item-check">
                                    <input type="checkbox" id="item3" value="OptionC">
                                    <label for="item3">Option C</label><br>
                                </div>
                            </div>
                        </div>

                        <div class="date mb-3">
                            <label class="item-title mb-2" for="date">Date</label>
                            <input type="date" value="Duyanh" id="date" placeholder="Publish on: &nbsp"
                                onchange="this.className=(this.value!=''?'has-value':'')">
                        </div>

                        <div class="email mb-4">
                            <label class="item-title mb-2" for="email">Email</label>
                            <input type="email" id="email" placeholder="Text input">
                            <i class="fa-solid fa-envelope envelope1"></i>
                        </div>

                        <div class="files">
                            <div class="item-title d-flex w-100"
                                style="justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <div>Files</div>
                                <i style="font-size: 15px;" class="fa-solid fa-circle-plus"></i>
                            </div>
                            <div class=" row files-img">
                                <div class="col-4 p-0" style="padding-right: 5px!important;">
                                    <div class="card" style="">
                                        <img srcset="Rectangle11.png 2x" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="m-0">Bird-reynolds.jpg</p>
                                            <i class="fa-solid fa-circle-minus"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 p-0" style="padding-right: 5px!important;">
                                    <div class="card" style="">
                                        <img srcset="Rectangle12.png 2x" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="m-0">surface.jpg</p>
                                            <i class="fa-solid fa-circle-minus"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 p-0" style="padding-right: 5px!important;">
                                    <div classs="card" style="">
                                        <img srcset="Rectangle13.png 2x" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="m-0">breakfast.jpg</p>
                                            <i class="fa-solid fa-circle-minus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="title-headline d-flex mb-5" style="">
                            <div class="" style="margin-right: 10px; font-weight: 400;
                                font-size: 24px;
                                line-height: 28px;
                                
                                /* Blue/600 */
                                
                                color: #4271AE;">01</div>
                            <div style="font-weight: 400;
                                font-size: 24px;
                                line-height: 28px;
                                
                                /* gray/900 */
                                
                                color: #111111;  -webkit-line-clamp: 2;
                                -webkit-box-orient: vertical;
                                overflow: hidden;
                                display: -webkit-box;">
                                I’m a headline, use me to provide some structure
                            </div>
                        </div>
                        <div class="info-headline"
                            style="height: 130px; border-bottom: 1px solid #CCCCCC; margin-bottom: 80px;">
                            <div style="font-weight: 500;
                                font-size: 18px;
                                line-height: 21px;
                                /* identical to box height */
                                
                                
                                /* gray/900 */
                                
                                color: #111111; margin-bottom: 10px; ">Info</div>
                            <div class="headline">
                                <p>Info fields are great to provide some context for editors</p>
                            </div>
                        </div>
                        <div class="multiple" style="position: relative;">
                            <div class="item-title mb-3">Multiselect</div>
                            <select multiple class="multiple-select">
                                <option>Design</option>
                                <option>Photography</option>
                                <option>Developer</option>
                                <option>Freelancer</option>
                            </select>
                            <i style="    position: absolute;
                                top: 57px;
                                right: 8px;
                                font-size: 10px;" class="fa-solid fa-angle-down"></i>
                            <p class="mt-3 mb-5" style="font-weight: 400;
                                font-size: 14px;
                                line-height: 16px;
                                
                                /* gray/600 */
                                
                                color: #777777;">Select multiple categories</p>
                        </div>

                        <div class="number">
                            <div class="item-title d-flex" style="justify-content: start; text-align: center;">
                                <p>Number</p>
                                <p style="display: flex;
                                    align-items: center;
                                    margin-top: 5px;
                                    margin-left: 10px;
                                    color: #999999;">*</p>
                            </div>
                            <div class="number-input" style="position: relative;">
                                <input type="text" placeholder="Text input">
                                <p style="font-weight: 400;
                                    font-size: 16px;
                                    line-height: 24px;
                                    /* identical to box height, or 150% */
                                    
                                    
                                    /* gray/600 */
                                    
                                    color: #777777; position: absolute;
                                    top: 10px;
                                    left: 8px;">Show</p>
                                <p style="font-weight: 400;
                                    font-size: 16px;
                                    line-height: 24px;
                                    /* identical to box height, or 150% */
                                    
                                    
                                    /* gray/600 */
                                    
                                    color: #777777;     position: absolute;
                                    top: 10px;
                                    right: 3px;">projects per page</p>
                            </div>
                        </div>

                        <div class="page mt-5 mb-5">
                            <div class="item-title d-flex mb-4"
                                style="justify-content: space-between; align-items: center;">
                                <div>Pages</div>
                                <i class="fa-solid fa-circle-plus"></i>
                            </div>

                            <div class="page-file d-flex mb-1" style="align-items: center; justify-content: space-between; width: 100%;
                                height: 36px;
                                
                                /* White */
                                
                                background: #FFFFFF;">
                                <div class="page-file_left">
                                    <i class="fa-solid fa-envelope" style="width: 36px; height: 36px; background: #111111;     display: flex;
                                        background: #111111;
                                        justify-content: center;
                                        align-items: center;
                                        color: white;"></i>
                                    <p>Bird-reynolds.jpg</p>
                                </div>
                                <div class="page-file_right">
                                    <i class="fa-solid fa-circle" style="color: #A7BD68;"></i>
                                    <i class="fa-solid fa-ellipsis" style="padding: 0 12px;"></i>
                                </div>
                            </div>
                            <div class="page-file d-flex" style="align-items: center; justify-content: space-between; width: 100%;
                                height: 36px;
                                
                                /* White */
                                
                                background: #FFFFFF;">
                                <div class="page-file_left">
                                    <i class="fa-solid fa-envelope" style="width: 36px; height: 36px; background: #111111;     display: flex;
                                        background: #111111;
                                        justify-content: center;
                                        align-items: center;
                                        color: white;"></i>
                                    <p>Bird-reynolds.jpg</p>
                                </div>
                                <div class="page-file_right">
                                    <i class="fa-solid fa-circle" style="color: #A7BD68;"></i>
                                    <i class="fa-solid fa-ellipsis" style="padding: 0 12px;"></i>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-md-6 right">
                        <div class="radios">
                            <div class="item-title">
                                Radios
                            </div>
                            <div class="radios-option">
                                <div class="radios-item">
                                    <input type="radio" id="optionA" name="" value="">
                                    <label for="optionA">Option A</label><br>
                                </div>
                                <div class="radios-item">
                                    <input type="radio" id="optionB" name="" value="">
                                    <label for="optionB">Option B</label><br>
                                </div>
                                <div class="radios-item">
                                    <input type="radio" id="optionC" name="" value="">
                                    <label for="optionC">Option C</label><br>
                                </div>
                            </div>
                        </div>

                        <div class="range mb-3">
                            <div class="item-title mb-2">Range</div>
                            <div class="range-budget">
                                <label for="customRange1" class="form-label m-0 pr-1"
                                    style="padding-left:7px; padding-right: 7px;">Budget</label>
                                <input id="myinput" type="range" min="0" value="25" max="200" style="">
                                <img style="height: 18px; padding: 0; width: 55px; padding-left: 7px;" srcset="after.png 2x"
                                    alt="">
                            </div>
                        </div>

                        <div class="select-input mb-4" style="width:100%">
                            <div class="item-title mb-2">Select</div>
                            <select class="form-select" style="
                                width: 100%;
                                height: 40px;
                                border: 1px solid #CCCCCC;" aria-label="Default select example">
                                <option selected>Text input</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="structure w-100">
                            <div class="item-title d-flex w-100"
                                style="justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <div>Structure</div>
                                <i style="font-size: 15px;" class="fa-solid fa-circle-plus"></i>
                            </div>

                            <div class="table-scroll">

                                <table class="table table-borderless w-100">
                                    <thead>
                                        <tr>
                                            <th style="font-weight: 400!important;" scope="col">#</th>
                                            <th style="font-weight: 400!important;" scope="col">Title</th>
                                            <th style="font-weight: 400!important;" scope="col">Icon</th>
                                            <th style="font-weight: 400!important;" scope="col">Text</th>
                                            <th style="font-weight: 400!important;" scope="col">Link</th>
                                            <th style="font-weight: 400!important;" scope="col">Link Text</th>
                                            <th style="font-weight: 400!important;" scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th style="border-bottom: none;
                                                        font-weight: 400!important;
                                                        font-size: 14px;
                                                        color: #999999;" scope="row">1</th>
                                            <td> Contact</td>
                                            <td>contact.svg</td>
                                            <td style="">Contact us f...</td>
                                            <td>http://exam...</td>
                                            <td>Super Comp...</td>
                                            <td><i class="fa-solid fa-circle-minus"></i></td>
                                        </tr>
                                        <tr>
                                            <th style="border-bottom: none;
                                                        font-weight: 400!important;
                                                        font-size: 14px;
                                                        color: #999999;" scope="row">2</th>
                                            <td>Forum</td>
                                            <td>forum.svg</td>
                                            <td>Got stuck?...</td>
                                            <td>http://foru...</td>
                                            <td>Kirby Forum...</td>
                                            <td><i class="fa-solid fa-circle-minus"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="tags w-100 mt-4">
                            <div class="item-title mb-2">
                                Tags
                            </div>

                            <div class="tags-item d-flex">
                                <div class="item-tag">
                                    <div class="item">
                                        <div>Kirby</div>
                                        <div class="exit">
                                            <i class="fa-solid fa-xmark"></i>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div>CMS</div>
                                        <div class="exit">
                                            <i class="fa-solid fa-xmark"></i>
                                        </div>
                                    </div>
                                    <div class="item mb-0">
                                        <div>Fields</div>
                                        <div class="exit">
                                            <i class="fa-solid fa-xmark"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="tag">
                                    <img class="p-0" srcset="/tag.png 2x" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="tel mt-3">
                            <div class="item-title mb-2">
                                Tel
                            </div>

                            <div class="email">
                                <input type="text" placeholder="Text input">
                                <i class="fa-solid fa-phone envelope1"></i>
                            </div>

                            <div class="help mt-2 mb-4">Help text</div>
                        </div>

                        <div class="text-field">
                            <div class="item-title d-flex" style="justify-content: start; text-align: center;">
                                <p>Text field</p>
                                <p style="display: flex;
                                    align-items: center;
                                    margin-top: 5px;
                                    margin-left: 10px;
                                    color: #999999;">*</p>
                            </div>

                            <div class="text-field_input email">
                                <input type="text" placeholder="Text input">
                            </div>

                            <div class="help mt-2 mb-5">Help text</div>
                        </div>

                        <div class="ckediter">
                            <textarea name="content"></textarea>
                        </div>


                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="item-title mb-3">Toogle</div>
                                <div class="toggle-item">
                                    <label class="switch" style="margin-right: 10px;">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                    <div>Tooggle text</div>
                                </div>

                            </div>
                            <div class="col-12 col-md-6">
                                <div class="item-title mb-3">URL</div>
                                <div class="url-item email">
                                    <input type="text" placeholder="https://getkirby.com">
                                    <i class="fa-solid fa-link envelope1"></i>
                                </div>
                            </div>
                        </div>

                        <div class="page mt-5 mb-5">
                            <div class="item-title d-flex mb-4"
                                style="justify-content: space-between; align-items: center;">
                                <div>User</div>
                                <i class="fa-solid fa-circle-plus"></i>
                            </div>

                            <div class="page-file d-flex mb-1" style="align-items: center; justify-content: space-between; width: 100%;
                                height: 36px;
                                
                                /* White */
                                
                                background: #FFFFFF;">
                                <div class="page-file_left">
                                    <i class="fa-solid fa-user" style="width: 36px; height: 36px; background: #111111;     display: flex;
                                        background: #111111;
                                        justify-content: center;
                                        align-items: center;
                                        color: white;"></i>
                                    <p>Bird-reynolds.jpg</p>
                                </div>
                                <div class="page-file_right">
                                    <i class="fa-solid fa-circle" style="color: #A7BD68;"></i>
                                    <i class="fa-solid fa-ellipsis" style="padding: 0 12px;"></i>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>

                <div id="Paris" class="tabcontent">
                    <!-- noi dung setting -->
                </div>
            </div>

        </div>
    </div>
@endsection
