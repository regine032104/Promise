<!-- modals: login & register -->
<div id="modal-overlay"
  class="fixed inset-0 z-40 hidden items-center justify-center overflow-y-auto overscroll-contain bg-black/60 px-4 py-6 opacity-0 backdrop-blur-sm transition-opacity duration-200 sm:py-10">
  <!-- login Modal -->
  <div id="login-modal"
    class="modal-panel relative mx-auto hidden max-h-[calc(100svh-2rem)] w-full max-w-[440px] scale-95 overflow-y-auto rounded-2xl border border-pink-100/40 bg-white p-6 text-pink-900 opacity-0 shadow-[0_10px_30px_rgba(236,72,153,0.06)] ring-1 ring-pink-50 transition-all duration-300 sm:max-h-[calc(100svh-4rem)] sm:p-8"
    role="dialog" aria-modal="true" aria-labelledby="login-title">
    <div
      class="shadow-top pointer-events-none absolute inset-x-0 top-0 h-6 bg-gradient-to-b from-white/80 to-transparent opacity-0 transition-opacity duration-200">
    </div>
    <div
      class="shadow-bottom pointer-events-none absolute inset-x-0 bottom-0 h-8 bg-gradient-to-t from-white/80 to-transparent opacity-0 transition-opacity duration-200">
    </div>
    <button id="close-login" aria-label="Close login modal"
      class="absolute top-4 right-4 transform cursor-pointer text-4xl font-semibold text-pink-600/80 transition hover:rotate-90 hover:text-pink-800">
      ×
    </button>
    <h2 id="login-title" class="font-RobotoCondensed mb-2 text-center text-3xl font-semibold text-pink-800">
      Welcome Back
    </h2>
    <p class="mb-6 text-center text-sm text-pink-700/70">
      Sign in to continue your journey with
      <span class="animate-glow font-GreatVibes text-pink-600">Pro</span><span
        class="animate-glow font-GreatVibes text-pink-900">mise</span>.
    </p>
    <form novalidate id="login-form" class="space-y-5">
      <div>
        <label for="login-email" class="mb-1 block text-sm font-medium text-pink-700">Email</label>
        <input id="login-email" type="email" autocomplete="email"
          class="w-full rounded-md border border-pink-100 bg-pink-50 px-3 py-2 text-pink-900 placeholder-pink-400 focus:border-pink-400 focus:ring-2 focus:ring-pink-300/60 focus:outline-none" />
        <p data-error-for="login-email" class="mt-1 hidden text-xs font-medium text-red-500"></p>
      </div>
      <div>
        <label for="login-password" class="mb-1 block text-sm font-medium text-pink-700">Password</label>
        <div class="relative">
          <input id="login-password" type="password" autocomplete="current-password"
            class="w-full rounded-md border border-pink-100 bg-pink-50 px-3 py-2 pr-10 text-pink-900 placeholder-pink-400 focus:border-pink-400 focus:ring-2 focus:ring-pink-300/60 focus:outline-none" />
          <button type="button" class="password-toggle absolute top-1/2 right-2 -translate-y-1/2 cursor-pointer"
            aria-label="Show password" tabindex="0" data-target="#login-password">
            <svg class="h-5 w-5 text-pink-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
              aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
          </button>
        </div>
        <p data-error-for="login-password" class="mt-1 hidden text-xs font-medium text-red-400"></p>
      </div>
      <div class="pt-2">
        <button type="submit"
          class="w-full cursor-pointer rounded-full bg-gradient-to-r from-pink-500 to-rose-500 px-6 py-2 font-semibold text-white transition hover:shadow-[0_0_25px_rgba(236,72,153,0.25)] focus:ring-2 focus:ring-pink-300 focus:ring-offset-2 focus:ring-offset-pink-50 focus:outline-none">
          Sign In
        </button>
      </div>
      <div class="text-center text-sm text-pink-700/70">
        No account yet?
        <button type="button" id="switch-to-signup"
          class="cursor-pointer text-pink-600 underline decoration-pink-200 underline-offset-4 hover:text-pink-500">
          Create one
        </button>
      </div>
    </form>
  </div>

  <!-- register Modal -->
  <div id="signup-modal"
    class="modal-panel relative mx-auto hidden max-h-[calc(100svh-2rem)] w-full max-w-[480px] scale-95 overflow-y-auto rounded-2xl border border-pink-100/40 bg-white p-6 text-pink-900 opacity-0 shadow-[0_10px_30px_rgba(236,72,153,0.06)] ring-1 ring-pink-50 transition-all duration-300 sm:max-h-[calc(100svh-4rem)] sm:p-8"
    role="dialog" aria-modal="true" aria-labelledby="signup-title">
    <div
      class="shadow-top pointer-events-none absolute inset-x-0 top-0 h-6 bg-gradient-to-b from-white/80 to-transparent opacity-0 transition-opacity duration-200">
    </div>
    <div
      class="shadow-bottom pointer-events-none absolute inset-x-0 bottom-0 h-8 bg-gradient-to-t from-white/80 to-transparent opacity-0 transition-opacity duration-200">
    </div>
    <button id="close-signup" aria-label="Close signup modal"
      class="absolute top-4 right-4 transform cursor-pointer text-4xl font-semibold text-pink-600/80 transition hover:rotate-90 hover:text-pink-800">
      ×
    </button>
    <h2 id="signup-title" class="font-RobotoCondensed mb-2 text-center text-3xl font-semibold text-pink-800">
      Create Account
    </h2>
    <p class="mb-6 text-center text-sm text-pink-700/70">
      Join <span class="animate-glow font-GreatVibes text-pink-600">Pro</span><span
        class="animate-glow font-GreatVibes text-pink-900">mise</span> and
      begin exploring.
    </p>
    <form novalidate id="signup-form" class="space-y-5">
      <div class="grid gap-5 sm:grid-cols-2">
        <div>
          <label for="reg-first" class="mb-1 block text-sm font-medium text-pink-700">First Name</label>
          <input id="reg-first" type="text" autocomplete="given-name"
            class="w-full rounded-md border border-pink-100 bg-pink-50 px-3 py-2 text-pink-900 placeholder-pink-400 focus:border-pink-400 focus:ring-2 focus:ring-pink-300/60 focus:outline-none" />
          <p data-error-for="reg-first" class="mt-1 hidden text-xs font-medium text-red-400"></p>
        </div>
        <div>
          <label for="reg-last" class="mb-1 block text-sm font-medium text-pink-700">Last Name</label>
          <input id="reg-last" type="text" autocomplete="family-name"
            class="w-full rounded-md border border-pink-100 bg-pink-50 px-3 py-2 text-pink-900 placeholder-pink-400 focus:border-pink-400 focus:ring-2 focus:ring-pink-300/60 focus:outline-none" />
          <p data-error-for="reg-last" class="mt-1 hidden text-xs font-medium text-red-400"></p>
        </div>
      </div>
      <div>
        <label for="reg-address" class="mb-1 block text-sm font-medium text-pink-700">Address</label>
        <input id="reg-address" type="text" autocomplete="street-address"
          class="w-full rounded-md border border-pink-100 bg-pink-50 px-3 py-2 text-pink-900 placeholder-pink-400 focus:border-pink-400 focus:ring-2 focus:ring-pink-300/60 focus:outline-none" />
        <p data-error-for="reg-address" class="mt-1 hidden text-xs font-medium text-red-400"></p>
      </div>
      <div class="grid gap-5 sm:grid-cols-2">
        <div>
          <label for="reg-email" class="mb-1 block text-sm font-medium text-pink-700">Email</label>
          <input id="reg-email" type="email" autocomplete="email"
            class="w-full rounded-md border border-pink-100 bg-pink-50 px-3 py-2 text-pink-900 placeholder-pink-400 focus:border-pink-400 focus:ring-2 focus:ring-pink-300/60 focus:outline-none" />
          <p data-error-for="reg-email" class="mt-1 hidden text-xs font-medium text-red-400"></p>
        </div>
        <div>
          <label for="reg-phone" class="mb-1 block text-sm font-medium text-pink-700">Contact Number</label>
          <input id="reg-phone" type="text" autocomplete="tel"
            class="w-full rounded-md border border-pink-100 bg-pink-50 px-3 py-2 text-pink-900 placeholder-pink-400 focus:border-pink-400 focus:ring-2 focus:ring-pink-300/60 focus:outline-none" />
          <p data-error-for="reg-phone" class="mt-1 hidden text-xs font-medium text-red-400"></p>
        </div>
      </div>
      <div class="grid gap-5 sm:grid-cols-2">
        <div>
          <label for="reg-pass" class="mb-1 block text-sm font-medium text-pink-700">Password</label>
          <input id="reg-pass" type="password" autocomplete="new-password"
            class="w-full rounded-md border border-pink-100 bg-pink-50 px-3 py-2 text-pink-900 placeholder-pink-400 focus:border-pink-400 focus:ring-2 focus:ring-pink-300/60 focus:outline-none" />
          <p data-error-for="reg-pass" class="mt-1 hidden text-xs font-medium text-red-400"></p>
        </div>
        <div>
          <label for="reg-pass-confirm" class="mb-1 block text-sm font-medium text-pink-700">Confirm Password</label>
          <input id="reg-pass-confirm" type="password" autocomplete="new-password"
            class="w-full rounded-md border border-pink-100 bg-pink-50 px-3 py-2 text-pink-900 placeholder-pink-400 focus:border-pink-400 focus:ring-2 focus:ring-pink-300/60 focus:outline-none" />
          <p data-error-for="reg-pass-confirm" class="mt-1 hidden text-xs font-medium text-red-400"></p>
        </div>
      </div>
      <div class="pt-2">
        <button type="submit"
          class="w-full cursor-pointer rounded-full bg-gradient-to-r from-pink-500 to-rose-500 px-6 py-2 font-semibold text-white transition hover:shadow-[0_0_25px_rgba(236,72,153,0.25)] focus:ring-2 focus:ring-pink-300 focus:ring-offset-2 focus:ring-offset-pink-50 focus:outline-none">
          Create Account
        </button>
      </div>
      <div class="cursor-pointer text-center text-sm text-pink-700/70">
        Already have an account?
        <button type="button" id="switch-to-login"
          class="cursor-pointer text-pink-600 underline decoration-pink-200 underline-offset-4 hover:text-pink-500">
          Sign in
        </button>
      </div>
    </form>
  </div>
</div>