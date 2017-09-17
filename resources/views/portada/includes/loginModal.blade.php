<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body">
                <div class="widget clearfix">
                    <div class="post-padding item-price">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="content-title">
                                    <h4><i class="fa fa-lock"></i> Login Account</h4>
                                </div><!-- end widget-title -->
                                {{ Form::open(['route' => 'frontend.auth.login.post', 'class' => 'form-horizontal']) }}

                                <div class="form-group">

                                    <div class="col-md-12">
                                        {{ Form::email('email', null, ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('validation.attributes.frontend.email')]) }}
                                    </div><!--col-md-6-->
                                </div><!--form-group-->

                                <div class="form-group">

                                    <div class="col-md-12">
                                        {{ Form::password('password', ['class' => 'form-control', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.password')]) }}
                                    </div><!--col-md-6-->
                                </div><!--form-group-->


                                <div class="form-group">
                                    <div class="col-md-12 col-md-offset-3">
                                        {{ Form::submit('Entrar', ['class' => 'btn btn-primary', 'style' => 'margin-right:15px']) }}

                                        </div><!--col-md-6-->
                                    <div class="col-md-12 col-md-offset-2">
                                      {{ link_to_route('frontend.auth.password.reset', 'Olvidaste tu contraseña') }}

                                    </div>
                                </div><!--form-group-->

                                {{ Form::close() }}
                            </div><!-- end col -->

                            <div class="col-md-6">
                                <div class="content-title">
                                    <h4>No have account?</h4>
                                </div><!-- end widget-title -->

                                <p>Registrate ahora y sube convenios</p>
                                <a href="/register" class="btn btn-custom">Register Account</a>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end newsletter -->
                </div><!-- end post-padding -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
