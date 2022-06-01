<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('video_link'), 'has-success': fields.video_link && fields.video_link.valid }">
  <label for="video_link" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.video.columns.video_link') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.video_link" v-validate="'required'"
           @input="validate($event)"
           @change="onVideoLinkChange($event)"
           class="form-control"
           :class="{'form-control-danger': errors.has('video_link'), 'form-control-success': fields.video_link && fields.video_link.valid}"
           id="video_link" name="video_link" placeholder="{{ trans('admin.video.columns.video_link') }}">
    <div v-if="errors.has('video_link')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('video_link')
      }}
    </div>
  </div>
</div>

<div class="form-group row align-items-center" v-if="form.thumb_default">
  <label for="video_link" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.video.columns.video_preview') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <div class="row">
      <div class="col">
        <img :src="form.thumb_medium" class="img-fluid w-100">
      </div>
      <div class="col">
        <h3>@{{form.title}}</h3>
        <p>@{{form.description?.slice(0,400)}}...</p>
      </div>
    </div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('service_id'), 'has-success': fields.service_id && fields.service_id.valid }">
  <label for="service_id" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.video.columns.service_id') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <!--    <input type="text" v-model="form.service_id" v-validate="'required|integer'" @input="validate($event)"
           class="form-control"
           :class="{'form-control-danger': errors.has('service_id'), 'form-control-success': fields.service_id && fields.service_id.valid}"
           id="service_id" name="service_id" placeholder="{{ trans('admin.video.columns.service_id') }}">-->
    <select v-model="form.service_id"
            v-validate="'required|integer'" @input="validate($event)"
            class="form-control"
            :class="{'form-control-danger': errors.has('service_id'), 'form-control-success': fields.service_id && fields.service_id.valid}"
            id="service_id" name="service_id">
      <option value=""></option>
      @foreach($services as $service)
        <option value="{{$service->id}}">{{ $service->title }}</option>
      @endforeach
    </select>
    <div v-if="errors.has('service_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('service_id')
      }}
    </div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('order'), 'has-success': fields.order && fields.order.valid }">
  <label for="order" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.video.columns.order') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="number" v-model="form.order" v-validate="'integer'" @input="validate($event)"
           class="form-control"
           :class="{'form-control-danger': errors.has('order'), 'form-control-success': fields.order && fields.order.valid}"
           id="order" name="order" placeholder="{{ trans('admin.video.columns.order') }}">
    <div v-if="errors.has('order')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('order') }}</div>
  </div>
</div>

{{-- AutoFilled fielda --}}
<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('title'), 'has-success': fields.title && fields.title.valid }">
  <label for="title" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.video.columns.title') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.title" v-validate="'required'"
           @input="validate($event)"
           @change="onVideoLinkChange($event)"
           class="form-control"
           :class="{'form-control-danger': errors.has('title'), 'form-control-success': fields.title && fields.title.valid}"
           id="title" name="title" placeholder="{{ trans('admin.video.columns.title') }}">
    <div v-if="errors.has('title')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('title')
      }}
    </div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('description'), 'has-success': fields.description && fields.description.valid }">
  <label for="description" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.video.columns.description') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.description" v-validate="'required'"
           @input="validate($event)"
           @change="onVideoLinkChange($event)"
           class="form-control"
           :class="{'form-control-danger': errors.has('description'), 'form-control-success': fields.description && fields.description.valid}"
           id="description" name="description" placeholder="{{ trans('admin.video.columns.description') }}">
    <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{
      errors.first('description')
      }}
    </div>
  </div>
</div>


<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('thumb_default'), 'has-success': fields.thumb_default && fields.thumb_default.valid }">
  <label for="thumb_default" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.video.columns.thumb_default') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.thumb_default" v-validate="'required'"
           @input="validate($event)"
           @change="onVideoLinkChange($event)"
           class="form-control"
           :class="{'form-control-danger': errors.has('thumb_default'), 'form-control-success': fields.thumb_default && fields.thumb_default.valid}"
           id="thumb_default" name="thumb_default" placeholder="{{ trans('admin.video.columns.thumb_default') }}">
    <div v-if="errors.has('thumb_default')" class="form-control-feedback form-text" v-cloak>@{{
      errors.first('thumb_default')
      }}
    </div>
  </div>
</div>


<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('thumb_medium'), 'has-success': fields.thumb_medium && fields.thumb_medium.valid }">
  <label for="thumb_medium" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.video.columns.thumb_medium') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.thumb_medium" v-validate="'required'"
           @input="validate($event)"
           @change="onVideoLinkChange($event)"
           class="form-control"
           :class="{'form-control-danger': errors.has('thumb_medium'), 'form-control-success': fields.thumb_medium && fields.thumb_medium.valid}"
           id="thumb_medium" name="thumb_medium" placeholder="{{ trans('admin.video.columns.thumb_medium') }}">
    <div v-if="errors.has('thumb_medium')" class="form-control-feedback form-text" v-cloak>@{{
      errors.first('thumb_medium')
      }}
    </div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('thumb_high'), 'has-success': fields.thumb_high && fields.thumb_high.valid }">
  <label for="thumb_high" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.video.columns.thumb_high') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.thumb_high" v-validate="'required'"
           @input="validate($event)"
           @change="onVideoLinkChange($event)"
           class="form-control"
           :class="{'form-control-danger': errors.has('thumb_high'), 'form-control-success': fields.thumb_high && fields.thumb_high.valid}"
           id="thumb_high" name="thumb_high" placeholder="{{ trans('admin.video.columns.thumb_high') }}">
    <div v-if="errors.has('thumb_high')" class="form-control-feedback form-text" v-cloak>@{{
      errors.first('thumb_high')
      }}
    </div>
  </div>
</div>
