<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('{{$name}}'), 'has-success': fields.{{$name}} && fields.{{$name}}.valid }">
  <label for="textarea_{{$name}}" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.service.columns.' . $name) }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <div>
      <textarea v-model="form.{{$name}}" v-validate="{{$validations ?? ''}}"
                class="hidden-xs-up"
                id="textarea_{{$name}}" name="{{$name}}"
                placeholder="{{ trans('admin.service.columns.' . $name) }}"></textarea>
      <quill-editor v-model="form.{{$name}}" :options="wysiwygConfig"/>
    </div>
    <div v-if="errors.has('{{$name}}')" class="form-control-feedback form-text" v-cloak v-html="errors.first('{{$name}}')"></div>
  </div>
</div>
