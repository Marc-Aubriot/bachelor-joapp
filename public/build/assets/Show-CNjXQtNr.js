import{_ as c}from"./AppLayout-BWI0_1ih.js";import p from"./DeleteUserForm-DLWBn1SX.js";import l from"./LogoutOtherBrowserSessionsForm-WgmDwE0j.js";import{S as s}from"./SectionBorder-DNDAqYa9.js";import f from"./TwoFactorAuthenticationForm-DVS-zCRC.js";import u from"./UpdatePasswordForm-D8sAEvUS.js";import _ from"./UpdateProfileInformationForm-DmrVaKvL.js";import{o,c as d,w as n,a as i,e as r,b as t,f as a,F as h}from"./app-AflS4ljL.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";import"./ResponsiveNavLink-q8J8tCIj.js";import"./DialogModal-ZTbpmElq.js";import"./SectionTitle-GOtjF8LZ.js";import"./DangerButton-CtDU6RH7.js";import"./TextInput-BtC4EuFW.js";import"./SecondaryButton-BVNOe4Dj.js";import"./ActionMessage-DSDHpJqq.js";import"./PrimaryButton-CUvecwZ5.js";import"./InputLabel-Czu7WIYY.js";import"./FormSection-DX_Zs1-D.js";const g=i("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"}," Profile ",-1),$={class:"max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"},w={key:0},k={key:1},y={key:2},G={__name:"Show",props:{confirmsTwoFactorAuthentication:Boolean,sessions:Array},setup(m){return(e,x)=>(o(),d(c,{title:"Profile"},{header:n(()=>[g]),default:n(()=>[i("div",null,[i("div",$,[e.$page.props.jetstream.canUpdateProfileInformation?(o(),r("div",w,[t(_,{user:e.$page.props.auth.user},null,8,["user"]),t(s)])):a("",!0),e.$page.props.jetstream.canUpdatePassword?(o(),r("div",k,[t(u,{class:"mt-10 sm:mt-0"}),t(s)])):a("",!0),e.$page.props.jetstream.canManageTwoFactorAuthentication?(o(),r("div",y,[t(f,{"requires-confirmation":m.confirmsTwoFactorAuthentication,class:"mt-10 sm:mt-0"},null,8,["requires-confirmation"]),t(s)])):a("",!0),t(l,{sessions:m.sessions,class:"mt-10 sm:mt-0"},null,8,["sessions"]),e.$page.props.jetstream.hasAccountDeletionFeatures?(o(),r(h,{key:3},[t(s),t(p,{class:"mt-10 sm:mt-0"})],64)):a("",!0)])])]),_:1}))}};export{G as default};
