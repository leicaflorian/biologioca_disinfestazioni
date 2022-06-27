<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('{{$name}}'), 'has-success': fields.{{$name}} && fields.{{$name}}.valid }">
  <label for="input_{{$name}}" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.service.columns.' . $name) }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.{{$name}}" v-validate="{{$validations ?? ''}}" @input="validate($event)" class="form-control"
           :class="{'form-control-danger': errors.has('{{$name}}'), 'form-control-success': fields.{{$name}} && fields.{{$name}}.valid}"
           id="input_{{$name}}" name="{{$name}}" placeholder="{{ trans('admin.service.columns.' . $name) }}">
    <div v-if="errors.has('{{$name}}')" class="form-control-feedback form-text" v-cloak v-html="errors.first('{{$name}}')"></div>
  </div>
</div>
