(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[40],{292:function(e,t,c){"use strict";var o=c(13),n=c.n(o),s=c(0),a=c(5),l=c.n(a);c(293),t.a=e=>{let{children:t,className:c,headingLevel:o,...a}=e;const r=l()("wc-block-components-title",c),d="h"+o;return Object(s.createElement)(d,n()({className:r},a),t)}},293:function(e,t){},294:function(e,t){},319:function(e,t,c){"use strict";var o=c(0),n=c(5),s=c.n(n),a=c(292);c(294);const l=e=>{let{title:t,stepHeadingContent:c}=e;return Object(o.createElement)("div",{className:"wc-block-components-checkout-step__heading"},Object(o.createElement)(a.a,{"aria-hidden":"true",className:"wc-block-components-checkout-step__title",headingLevel:"2"},t),!!c&&Object(o.createElement)("span",{className:"wc-block-components-checkout-step__heading-content"},c))};t.a=e=>{let{id:t,className:c,title:n,legend:a,description:r,children:d,disabled:i=!1,showStepNumber:b=!0,stepHeadingContent:u=(()=>{})}=e;const p=a||n?"fieldset":"div";return Object(o.createElement)(p,{className:s()(c,"wc-block-components-checkout-step",{"wc-block-components-checkout-step--with-step-number":b,"wc-block-components-checkout-step--disabled":i}),id:t,disabled:i},!(!a&&!n)&&Object(o.createElement)("legend",{className:"screen-reader-text"},a||n),!!n&&Object(o.createElement)(l,{title:n,stepHeadingContent:u()}),Object(o.createElement)("div",{className:"wc-block-components-checkout-step__container"},!!r&&Object(o.createElement)("p",{className:"wc-block-components-checkout-step__description"},r),Object(o.createElement)("div",{className:"wc-block-components-checkout-step__content"},d)))}},451:function(e,t){},511:function(e,t,c){"use strict";c.r(t);var o=c(0),n=c(5),s=c.n(n),a=c(1),l=c(319),r=c(94),d=c(4),i=c(3),b=c(9);c(451);const u=e=>{let{className:t="",disabled:c=!1,onTextChange:n,placeholder:a,value:l=""}=e;return Object(o.createElement)("textarea",{className:s()("wc-block-components-textarea",t),disabled:c,onChange:e=>{n(e.target.value)},placeholder:a,rows:2,value:l})};var p=e=>{let{disabled:t,onChange:c,placeholder:n,value:s}=e;const[l,r]=Object(o.useState)(!1),[d,i]=Object(o.useState)("");return Object(o.createElement)("div",{className:"wc-block-checkout__add-note"},Object(o.createElement)(b.CheckboxControl,{disabled:t,label:Object(a.__)("Add a note to your order","woocommerce"),checked:l,onChange:e=>{r(e),e?s!==d&&c(d):(c(""),i(s))}}),l&&Object(o.createElement)(u,{disabled:t,onTextChange:c,placeholder:n,value:s}))};t.default=e=>{let{className:t}=e;const{needsShipping:c}=Object(r.a)(),{isProcessing:n,orderNotes:b}=Object(d.useSelect)(e=>{const t=e(i.CHECKOUT_STORE_KEY);return{isProcessing:t.isProcessing(),orderNotes:t.getOrderNotes()}}),{__internalSetOrderNotes:u}=Object(d.useDispatch)(i.CHECKOUT_STORE_KEY);return Object(o.createElement)(l.a,{id:"order-notes",showStepNumber:!1,className:s()("wc-block-checkout__order-notes",t),disabled:n},Object(o.createElement)(p,{disabled:n,onChange:u,placeholder:c?Object(a.__)("Notes about your order, e.g. special notes for delivery.","woocommerce"):Object(a.__)("Notes about your order.","woocommerce"),value:b}))}}}]);