<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('slug'), 'has-success': fields.slug && fields.slug.valid }">
  <label for="slug" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.service.columns.slug') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.slug" v-validate="'required'" @input="validate($event)" class="form-control"
           :class="{'form-control-danger': errors.has('slug'), 'form-control-success': fields.slug && fields.slug.valid}"
           id="slug" name="slug" placeholder="{{ trans('admin.service.columns.slug') }}">
    <div v-if="errors.has('slug')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('slug') }}</div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
  <label for="name" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.service.columns.name') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control"
           :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}"
           id="name" name="name" placeholder="{{ trans('admin.service.columns.name') }}">
    <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('title'), 'has-success': fields.title && fields.title.valid }">
  <label for="title" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.service.columns.title') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.title" v-validate="'required'" @input="validate($event)" class="form-control"
           :class="{'form-control-danger': errors.has('title'), 'form-control-success': fields.title && fields.title.valid}"
           id="title" name="title" placeholder="{{ trans('admin.service.columns.title') }}">
    <div v-if="errors.has('title')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('title') }}</div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('description'), 'has-success': fields.description && fields.description.valid }">
  <label for="description" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.service.columns.description') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    {{--        <input type="text" v-model="form.description" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('description'), 'form-control-success': fields.description && fields.description.valid}" id="description" name="description" placeholder="{{ trans('admin.service.columns.description') }}">--}}
    <div>
      <textarea v-model="form.description" v-validate="'required'"
                class="hidden-xs-up"
                id="description" name="description"
                placeholder="{{ trans('admin.service.columns.description') }}"></textarea>
      <quill-editor v-model="form.description" :options="wysiwygConfig"/>
    </div>
    <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{
      errors.first('description') }}
    </div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('description_long'), 'has-success': fields.description_long && fields.description_long.valid }">
  <label for="description_long" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.service.columns.description_long') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.description_long" v-validate="''" @input="validate($event)" class="form-control"
           :class="{'form-control-danger': errors.has('description_long'), 'form-control-success': fields.description_long && fields.description_long.valid}"
           id="description_long" name="description_long"
           placeholder="{{ trans('admin.service.columns.description_long') }}">
    <div v-if="errors.has('description_long')" class="form-control-feedback form-text" v-cloak>@{{
      errors.first('description_long') }}
    </div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('description_short'), 'has-success': fields.description_short && fields.description_short.valid }">
  <label for="description_short" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.service.columns.description_short') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.description_short" v-validate="''" @input="validate($event)" class="form-control"
           :class="{'form-control-danger': errors.has('description_short'), 'form-control-success': fields.description_short && fields.description_short.valid}"
           id="description_short" name="description_short"
           placeholder="{{ trans('admin.service.columns.description_short') }}">
    <div v-if="errors.has('description_short')" class="form-control-feedback form-text" v-cloak>@{{
      errors.first('description_short') }}
    </div>
  </div>
</div>


<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('img_cover_alt'), 'has-success': fields.img_cover_alt && fields.img_cover_alt.valid }">
  <label for="img_cover_alt" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.service.columns.img_cover_alt') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.img_cover_alt" v-validate="''" @input="validate($event)" class="form-control"
           :class="{'form-control-danger': errors.has('img_cover_alt'), 'form-control-success': fields.img_cover_alt && fields.img_cover_alt.valid}"
           id="img_cover_alt" name="img_cover_alt" placeholder="{{ trans('admin.service.columns.img_cover_alt') }}">
    <div v-if="errors.has('img_cover_alt')" class="form-control-feedback form-text" v-cloak>@{{
      errors.first('img_cover_alt') }}
    </div>
  </div>
</div>

<div class="form-check row"
     :class="{'has-danger': errors.has('has_page'), 'has-success': fields.has_page && fields.has_page.valid }">
  <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
    <input class="form-check-input" id="has_page" type="checkbox" v-model="form.has_page" v-validate="''"
           data-vv-name="has_page" name="has_page_fake_element">
    <label class="form-check-label" for="has_page">
      {{ trans('admin.service.columns.has_page') }}
    </label>
    <input type="hidden" name="has_page" :value="form.has_page">
    <div v-if="errors.has('has_page')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('has_page') }}
    </div>
  </div>
</div>

<div class="form-check row"
     :class="{'has-danger': errors.has('featured'), 'has-success': fields.featured && fields.featured.valid }">
  <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
    <input class="form-check-input" id="featured" type="checkbox" v-model="form.featured" v-validate="''"
           data-vv-name="featured" name="featured_fake_element">
    <label class="form-check-label" for="featured">
      {{ trans('admin.service.columns.featured') }}
    </label>
    <input type="hidden" name="featured" :value="form.featured">
    <div v-if="errors.has('featured')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('featured') }}
    </div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('order'), 'has-success': fields.order && fields.order.valid }">
  <label for="order" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.service.columns.order') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.order" v-validate="'integer'" @input="validate($event)" class="form-control"
           :class="{'form-control-danger': errors.has('order'), 'form-control-success': fields.order && fields.order.valid}"
           id="order" name="order" placeholder="{{ trans('admin.service.columns.order') }}">
    <div v-if="errors.has('order')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('order') }}</div>
  </div>
</div>


@include('brackets/admin-ui::admin.includes.media-uploader', [
    'mediaCollection' => app(App\Models\Service::class)->getMediaCollection('img_cover'),
    'media' => $service->getThumbs200ForCollection('img_cover'),
    'label' => 'Immagine di copertina',
])

@include('brackets/admin-ui::admin.includes.media-uploader', [
    'mediaCollection' => app(App\Models\Service::class)->getMediaCollection('gallery'),
    'media' => $service->getThumbs200ForCollection('gallery'),
    'label' => 'Galleria'
])
