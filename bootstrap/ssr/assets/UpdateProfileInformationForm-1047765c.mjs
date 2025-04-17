import { unref, withCtx, createTextVNode, useSSRContext } from "vue";
import { ssrRenderAttrs, ssrRenderComponent, ssrRenderStyle } from "vue/server-renderer";
import { _ as _sfc_main$1, a as _sfc_main$2, b as _sfc_main$3 } from "./TextInput-d1d8bac9.mjs";
import { _ as _sfc_main$4 } from "./PrimaryButton-2c7b8ce0.mjs";
import { usePage, useForm, Link } from "@inertiajs/vue3";
const _sfc_main = {
  __name: "UpdateProfileInformationForm",
  __ssrInlineRender: true,
  props: {
    mustVerifyEmail: Boolean,
    status: String
  },
  setup(__props) {
    const props = __props;
    const user = usePage().props.auth.user;
    const form = useForm({
      name: user.name,
      email: user.email
    });
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<section${ssrRenderAttrs(_attrs)}><header><h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Profile Information</h2><p class="mt-1 text-sm text-gray-600 dark:text-gray-400"> Update your account&#39;s profile information and email address. </p></header><form class="mt-6 space-y-6"><div>`);
      _push(ssrRenderComponent(_sfc_main$1, {
        for: "name",
        value: "Name"
      }, null, _parent));
      _push(ssrRenderComponent(_sfc_main$2, {
        id: "name",
        type: "text",
        class: "mt-1 block w-full",
        modelValue: unref(form).name,
        "onUpdate:modelValue": ($event) => unref(form).name = $event,
        required: "",
        autofocus: "",
        autocomplete: "name"
      }, null, _parent));
      _push(ssrRenderComponent(_sfc_main$3, {
        class: "mt-2",
        message: unref(form).errors.name
      }, null, _parent));
      _push(`</div><div>`);
      _push(ssrRenderComponent(_sfc_main$1, {
        for: "email",
        value: "Email"
      }, null, _parent));
      _push(ssrRenderComponent(_sfc_main$2, {
        id: "email",
        type: "email",
        class: "mt-1 block w-full",
        modelValue: unref(form).email,
        "onUpdate:modelValue": ($event) => unref(form).email = $event,
        required: "",
        autocomplete: "username"
      }, null, _parent));
      _push(ssrRenderComponent(_sfc_main$3, {
        class: "mt-2",
        message: unref(form).errors.email
      }, null, _parent));
      _push(`</div>`);
      if (props.mustVerifyEmail && unref(user).email_verified_at === null) {
        _push(`<div><p class="text-sm mt-2 text-gray-800 dark:text-gray-200"> Your email address is unverified. `);
        _push(ssrRenderComponent(unref(Link), {
          href: _ctx.route("verification.send"),
          method: "post",
          as: "button",
          class: "underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
        }, {
          default: withCtx((_, _push2, _parent2, _scopeId) => {
            if (_push2) {
              _push2(` Click here to re-send the verification email. `);
            } else {
              return [
                createTextVNode(" Click here to re-send the verification email. ")
              ];
            }
          }),
          _: 1
        }, _parent));
        _push(`</p><div style="${ssrRenderStyle(props.status === "verification-link-sent" ? null : { display: "none" })}" class="mt-2 font-medium text-sm text-green-600 dark:text-green-400"> A new verification link has been sent to your email address. </div></div>`);
      } else {
        _push(`<!---->`);
      }
      _push(`<div class="flex items-center gap-4">`);
      _push(ssrRenderComponent(_sfc_main$4, {
        disabled: unref(form).processing
      }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`Save`);
          } else {
            return [
              createTextVNode("Save")
            ];
          }
        }),
        _: 1
      }, _parent));
      if (unref(form).recentlySuccessful) {
        _push(`<p class="text-sm text-gray-600 dark:text-gray-400">Saved.</p>`);
      } else {
        _push(`<!---->`);
      }
      _push(`</div></form></section>`);
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Profile/Partials/UpdateProfileInformationForm.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
