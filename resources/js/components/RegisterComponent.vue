<template>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register Card -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a :href="home_url" class="app-brand-link gap-2">
                              <span class="app-brand-logo demo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 46.98" class="iconLeft" width="250" height="46.98">
                                    <path d="M71.81 14.024V10.719H54.997v24.665h16.814v-3.303H58.909v-7.482h10.972v-3.093H58.909v-7.482Zm2.538 18.902c1.269 1.745 3.913 2.961 7.191 2.961 4.335 0 6.98 -2.115 6.98 -5.261 0 -6.213 -9.253 -4.124 -9.253 -7.905 0 -1.322 1.005 -2.194 3.067 -2.247 1.269 -0.026 2.723 0.582 3.781 1.586l2.035 -2.352c-1.164 -1.242 -3.384 -2.274 -5.975 -2.274 -4.177 0 -6.715 2.194 -6.715 5.419 0 6.372 9.094 4.441 9.094 7.852 0 1.295 -1.084 2.194 -3.225 2.194 -1.745 0 -3.331 -0.634 -4.6 -2.274Zm25.988 2.961c2.432 0 4.389 -0.714 6.001 -1.957l-2.168 -2.697c-0.952 0.925 -2.3 1.455 -3.755 1.455 -3.436 0 -5.499 -2.617 -5.499 -6.055 0 -3.41 2.063 -6.001 5.499 -6.001 1.453 0 2.802 0.528 3.753 1.453l2.168 -2.697c-1.613 -1.216 -3.569 -1.957 -6.001 -1.957 -5.445 0 -9.226 4.044 -9.226 9.2 0 5.208 3.781 9.253 9.226 9.253Zm17.078 -18.453c-2.089 0 -3.49 1.005 -4.467 2.776l-0.476 -2.327h-3.226v17.501h3.727v-9.119c0 -2.855 1.507 -5.393 4.23 -5.393 0.634 0 1.216 0.106 1.718 0.344l1.11 -3.199c-0.476 -0.291 -1.481 -0.582 -2.617 -0.582Zm21.625 8.83c0 -5.208 -3.516 -8.83 -8.592 -8.83 -5.287 0 -9.042 4.044 -9.042 9.2 0 5.182 3.701 9.174 9.465 9.174 3.04 0 5.578 -1.031 7.165 -2.802l-2.591 -2.089c-1.11 1.269 -2.617 1.931 -4.626 1.931 -3.278 0 -5.208 -2.274 -5.473 -5.393h13.694Zm-8.592 -5.815c2.723 0 4.494 1.639 4.891 4.415h-9.834c0.528 -2.643 2.353 -4.415 4.944 -4.415Zm24.164 -2.565 -5.102 13.086 -5.102 -13.086h-3.992l7.561 17.501h3.093l7.561 -17.501Zm11.606 18.003c2.458 0 4.785 -1.057 5.975 -2.723l0.582 2.22h3.145v-10.469c0 -4.97 -2.564 -7.482 -7.745 -7.482 -2.565 0 -4.732 0.661 -6.398 1.957l1.665 2.591c1.164 -1.005 2.67 -1.507 4.363 -1.507 2.776 0 4.389 1.322 4.389 3.675v1.455l-0.45 -0.159c-7.614 -2.856 -11.765 1.057 -11.765 4.811 0 3.278 2.776 5.632 6.239 5.632Zm1.11 -2.882c-2.194 0 -3.436 -1.401 -3.436 -3.014 0 -2.035 2.352 -4.072 7.799 -2.141l0.502 0.132v0.502c0 2.855 -2.3 4.52 -4.865 4.52Zm26.542 -11.261c2.776 -0.741 4.23 -2.511 4.23 -5.128 0 -3.648 -2.96 -5.895 -7.851 -5.895h-9.12v24.665h10.231c5.499 0 8.936 -2.723 8.936 -7.085 0 -3.595 -2.3 -5.975 -6.424 -6.556Zm0.37 -4.811c0 2.194 -1.586 3.542 -4.23 3.542h-4.944v-6.82h5.05c2.669 0 4.124 1.164 4.124 3.278Zm-3.384 15.544h-5.79v-8.803h5.657c3.358 0 5.499 1.586 5.499 4.363 0.026 2.723 -2.009 4.441 -5.367 4.441Zm29.715 -6.213c0 -5.208 -3.516 -8.831 -8.591 -8.831 -5.287 0 -9.015 4.044 -9.015 9.2 0 5.182 3.701 9.174 9.438 9.174 3.04 0 5.578 -1.031 7.165 -2.802l-2.565 -2.089c-1.136 1.269 -2.643 1.931 -4.626 1.931 -3.278 0 -5.208 -2.274 -5.473 -5.393h13.668Zm-8.591 -5.816c2.749 0 4.52 1.639 4.891 4.415h-9.835c0.555 -2.643 2.353 -4.415 4.944 -4.415Zm31.566 -3.014c-3.067 0 -4.626 1.164 -5.738 2.776 -1.11 -1.983 -3.04 -2.776 -5.05 -2.776s-3.807 0.952 -4.811 2.697l-0.423 -2.248h-3.277v17.501h3.727v-10.284c0.238 -2.934 1.613 -4.467 3.86 -4.467 2.38 0 3.357 1.956 3.357 4.811v9.94h3.727V26c0 -3.436 1.401 -5.367 3.833 -5.367s3.384 1.957 3.384 4.785v9.966h3.755v-10.231c0 -5.71 -3.014 -7.719 -6.344 -7.719ZM2.398 2.397a7.549 7.549 0 0 0 0 10.675l10.674 -10.675a7.548 7.548 0 0 0 -10.674 0zm26.169 36.843 18.227 7.553 -7.553 -18.226L15.993 5.319l-10.674 10.674 23.248 23.248zm2.43 -4.73c0.97 -0.972 2.807 -0.707 3.213 -0.302 -0.405 -0.405 -0.669 -2.242 0.301 -3.214s2.909 -1.315 2.909 -1.315l4.34 10.473 -1.607 1.606 -10.473 -4.34s0.345 -1.939 1.316 -2.909z" fill="#01252C"/>
                                </svg>
                              </span>
                            </a>
                        </div>
                        <!-- /Logo -->

                        <form id="formAuthentication" class="mb-3" :action="action_form" method="POST">
                            <input type="hidden" name="_token" :value="token_csrf">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    placeholder="Informe seu nome"
                                    autofocus
                                />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Informe seu email" />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">Senha</label>
                                <div class="input-group input-group-merge">
                                    <input
                                        type="password"
                                        id="password"
                                        class="form-control"
                                        name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password"
                                    />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password-confirm">Confirme sua senha</label>
                                <div class="input-group input-group-merge">
                                    <input
                                        type="password"
                                        id="password-confirm"
                                        class="form-control"
                                        name="password_confirmation"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password"
                                    />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary d-grid w-100">Registrar</button>
                        </form>

                        <p class="text-center">
                            <span>Já tem uma conta? </span>
                            <a :href="link_login">
                                <span>Faça login</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- Register Card -->
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'token_csrf',
            'link_login',
            'action_form',
            'home_url'
        ]
    }
</script>
