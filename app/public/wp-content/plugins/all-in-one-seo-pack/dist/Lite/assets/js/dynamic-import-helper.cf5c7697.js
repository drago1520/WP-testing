import{c as f,a as d}from"./vue-router.56da47b1.js";import{u as y,j as _,l as w}from"./links.7c59a081.js";import{a as h}from"./allowed.84696446.js";const c=(n,t,r)=>{const e=t[r];return e?()=>{const o=c(n,t,r+1);e({...n,next:o})}:n.next},R=(n,t)=>{const r=f({history:d(`wp-admin/admin.php?page=aioseo-${window.aioseo.page}`),routes:n,scrollBehavior(e,o,a){return a||(e.hash?{selector:e.hash}:{left:0,top:0})}});return r.beforeEach((e,o,a)=>{const s=y(),l=_();s.loaded||w(t),s.ping();const m=e.meta.access;if(!h(m))return e.meta.home!==o.name?r.replace({name:e.meta.home}):null;if(e.meta.middleware){const i=Array.isArray(e.meta.middleware)?e.meta.middleware:[e.meta.middleware],u={app:t,from:o,next:a,router:r,to:e},p=c(u,i,1);return i[0]({...u,next:p})}return l.resetPageNumbers(),a()}),r},A=(n,t)=>{const r=n[t];return r?typeof r=="function"?r():Promise.resolve(r):new Promise((e,o)=>{(typeof queueMicrotask=="function"?queueMicrotask:setTimeout)(o.bind(null,new Error("Unknown variable dynamic import: "+t)))})};export{A as _,R as s};
