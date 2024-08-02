import{T as _,o as c,e as f,b as e,u as o,a as t,w as d,Z as g,i as w,g as u,f as v,j as h,n as y}from"./app-DRjB9BXB.js";import{A as V}from"./AuthenticationCard-BDIDYBTA.js";import{H as x,F as b}from"./Footer-DO3tJWrl.js";import{_ as k}from"./Checkbox-Dw-EC9Nn.js";import{_ as n,a as l}from"./TextInput-BXQItpsG.js";import{_ as i}from"./InputLabel-DBhEj89k.js";import{_ as j}from"./PrimaryButton-u3-90hDS.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";import"./ResponsiveNavLink-Bnf5tvYr.js";const q={class:"h-screen w-full relative overflow-hidden"},$=t("img",{src:"../../../public/assets/jo-2024.jpeg",alt:"drapeau des jeux olympiques",class:"object-cover w-full h-full"},null,-1),P={class:"absolute h-full w-full top-0 flex justify-center items-center"},U={class:"mt-4"},C={class:"mt-4"},N={class:"mt-4"},A={class:"mt-4"},F={key:0,class:"mt-4"},T={class:"flex items-center"},B={class:"ms-2"},R=["href"],S=["href"],z={class:"flex items-center justify-end mt-4"},E={class:"w-full"},Q={__name:"Register",setup(H){const s=_({firstname:"",lastname:"",email:"",password:"",password_confirmation:"",terms:!1}),p=()=>{s.post(route("register"),{onFinish:()=>s.reset("password","password_confirmation")})};return(m,a)=>(c(),f("div",null,[e(o(g),{title:"Register"}),t("div",q,[e(x),$]),t("div",P,[e(V,null,{default:d(()=>[t("form",{onSubmit:w(p,["prevent"])},[t("div",null,[e(i,{for:"firstname",value:"Prénom"}),e(n,{id:"firstname",modelValue:o(s).firstname,"onUpdate:modelValue":a[0]||(a[0]=r=>o(s).firstname=r),type:"text",class:"mt-1 block w-full",required:"",autofocus:"",autocomplete:"name"},null,8,["modelValue"]),e(l,{class:"mt-2",message:o(s).errors.name},null,8,["message"])]),t("div",U,[e(i,{for:"lastname",value:"Nom"}),e(n,{id:"lastname",modelValue:o(s).lastname,"onUpdate:modelValue":a[1]||(a[1]=r=>o(s).lastname=r),type:"text",class:"mt-1 block w-full",required:"",autofocus:"",autocomplete:"name"},null,8,["modelValue"]),e(l,{class:"mt-2",message:o(s).errors.name},null,8,["message"])]),t("div",C,[e(i,{for:"email",value:"Adresse Email"}),e(n,{id:"email",modelValue:o(s).email,"onUpdate:modelValue":a[2]||(a[2]=r=>o(s).email=r),type:"email",class:"mt-1 block w-full",required:"",autocomplete:"username"},null,8,["modelValue"]),e(l,{class:"mt-2",message:o(s).errors.email},null,8,["message"])]),t("div",N,[e(i,{for:"password",value:"Mot de passe (ex: P4s$w0Rd)"}),e(n,{id:"password",modelValue:o(s).password,"onUpdate:modelValue":a[3]||(a[3]=r=>o(s).password=r),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"new-password"},null,8,["modelValue"]),e(l,{class:"mt-2",message:o(s).errors.password},null,8,["message"])]),t("div",A,[e(i,{for:"password_confirmation",value:"Confirmation du mot de passe"}),e(n,{id:"password_confirmation",modelValue:o(s).password_confirmation,"onUpdate:modelValue":a[4]||(a[4]=r=>o(s).password_confirmation=r),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"new-password"},null,8,["modelValue"]),e(l,{class:"mt-2",message:o(s).errors.password_confirmation},null,8,["message"])]),m.$page.props.jetstream.hasTermsAndPrivacyPolicyFeature?(c(),f("div",F,[e(i,{for:"terms"},{default:d(()=>[t("div",T,[e(k,{id:"terms",checked:o(s).terms,"onUpdate:checked":a[5]||(a[5]=r=>o(s).terms=r),name:"terms",required:""},null,8,["checked"]),t("div",B,[u(" I agree to the "),t("a",{target:"_blank",href:m.route("terms.show"),class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"},"Terms of Service",8,R),u(" and "),t("a",{target:"_blank",href:m.route("policy.show"),class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"},"Privacy Policy",8,S)])]),e(l,{class:"mt-2",message:o(s).errors.terms},null,8,["message"])]),_:1})])):v("",!0),t("div",z,[e(o(h),{href:m.route("login"),class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"},{default:d(()=>[u(" Vous avez un compte? ")]),_:1},8,["href"]),e(j,{class:y(["ms-4",{"opacity-25":o(s).processing}]),disabled:o(s).processing},{default:d(()=>[u(" S'enregistrer ")]),_:1},8,["class","disabled"])])],32)]),_:1})]),t("div",E,[e(b)])]))}};export{Q as default};