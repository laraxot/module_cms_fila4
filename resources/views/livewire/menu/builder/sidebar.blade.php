<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 815ce17 (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
<div id="menu-settings-column" class="metabox-holder">

    <div class="clear"></div>
    {{--
    <form id="nav-menu-meta" action="" class="nav-menu-meta" method="post" enctype="multipart/form-data">
    --}}
    <div id="side-sortables" class="accordion-container">
        <ul class="outer-border">
            <li class="control-section accordion-section  open add-page" id="add-page">
                <h3 class="accordion-section-title hndle" tabindex="0"> Custom Link <span
                        class="screen-reader-text">Press return or enter to expand</span></h3>
                <div class="accordion-section-content ">
                    <div class="inside">
                        <div class="customlinkdiv" id="customlinkdiv">
                            <p id="menu-item-url-wrap">
<<<<<<< HEAD
                                <label class="howto" for="custom-menu-item-url"> <span>URL</span>&nbsp;&nbsp;&nbsp;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                                <label class="howto" for="custom-menu-item-url"> <span>URL</span>&nbsp;&nbsp;&nbsp;
=======
                                <x-filament-forms::field-wrapper.label class="howto" for="custom-menu-item-url"> <span>URL</span>&nbsp;&nbsp;&nbsp;
>>>>>>> a12f125f4a (.)
=======
                                <label class="howto" for="custom-menu-item-url"> <span>URL</span>&nbsp;&nbsp;&nbsp;
>>>>>>> b93ef594b4 (.)
=======
                                <x-filament-forms::field-wrapper.label class="howto" for="custom-menu-item-url"> <span>URL</span>&nbsp;&nbsp;&nbsp;
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
                                    <input id="custom-menu-item-url" name="url" type="text"
                                        class="menu-item-textbox " placeholder="url" wire:model="item.link">
                                </label>
                            </p>

                            <p id="menu-item-name-wrap">
<<<<<<< HEAD
                                <label class="howto" for="custom-menu-item-name"> <span>Label</span>&nbsp;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                                <label class="howto" for="custom-menu-item-name"> <span>Label</span>&nbsp;
=======
                                <x-filament-forms::field-wrapper.label class="howto" for="custom-menu-item-name"> <span>Label</span>&nbsp;
>>>>>>> a12f125f4a (.)
=======
                                <label class="howto" for="custom-menu-item-name"> <span>Label</span>&nbsp;
>>>>>>> b93ef594b4 (.)
=======
                                <x-filament-forms::field-wrapper.label class="howto" for="custom-menu-item-name"> <span>Label</span>&nbsp;
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
                                    <input id="custom-menu-item-name" name="label" type="text"
                                        class="regular-text menu-item-textbox input-with-default-title"
                                        title="Label menu" wire:model="item.label">
                                </label>
                            </p>

                            @if (!empty($roles))
                                <p id="menu-item-role_id-wrap">
<<<<<<< HEAD
                                    <label class="howto" for="custom-menu-item-name"> <span>Role</span>&nbsp;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                                    <label class="howto" for="custom-menu-item-name"> <span>Role</span>&nbsp;
=======
                                    <x-filament-forms::field-wrapper.label class="howto" for="custom-menu-item-name"> <span>Role</span>&nbsp;
>>>>>>> a12f125f4a (.)
=======
                                    <label class="howto" for="custom-menu-item-name"> <span>Role</span>&nbsp;
>>>>>>> b93ef594b4 (.)
=======
                                    <x-filament-forms::field-wrapper.label class="howto" for="custom-menu-item-name"> <span>Role</span>&nbsp;
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
                                        <select id="custom-menu-item-role" name="role">
                                            <option value="0">Select Role</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->$role_pk }}">
                                                    {{ ucfirst($role->$role_title_field) }}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                </p>
                            @endif

                            <p class="button-controls">
                                <button href="#" wire:click="addMenuItem()"
                                    class="button-secondary submit-add-to-menu right">Add menu item</button>
                                <span class="spinner" id="spincustomu"></span>
                            </p>

                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
    {{--
    </form>
    --}}

</div>
