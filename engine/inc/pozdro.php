<?PHP
/***********************************************************
* Translate: 	 Dj_AlexN Graphic Group
* Version: 		 3.0
* Version DLE: 	 13.0
* Version PHP:	 7.0 and 7.2
* Dev team: 	 Dj_AlexN Graphic Group 
* Name Script:	 Moduł Pozdrowień 7.0 by Dj_AlexN Graphic
***********************************************************/ 
eval (base64_decode("aWYoICFkZWZpbmVkKCAnREFUQUxJRkVFTkdJTkUnICkgT1IgIWRlZmluZWQoICdMT0dHRURfSU4nICkgKSB7CgloZWFkZXIoICJIVFRQLzEuMSA0MDMgRm9yYmlkZGVuIiApOwoJaGVhZGVyICggJ0xvY2F0aW9uOiAuLi8uLi8nICk7CglkaWUoICJIYWNraW5nIGF0dGVtcHQhIiApOwp9CgppZiggISR1c2VyX2dyb3VwWyRtZW1iZXJfaWRbJ3VzZXJfZ3JvdXAnXV0gWydhZG1pbl9wb3pkcm8nXSApIHsKCW1zZyggImVycm9yIiwgJGxhbmdbJ2luZGV4X2RlbmllZCddLCAkbGFuZ1snaW5kZXhfZGVuaWVkJ10gKTsKfQkKcmVxdWlyZV9vbmNlIChFTkdJTkVfRElSIC4gJy9tb2R1bGVzL3BvemRyby9kYXRhL3BvemRyb19jb25maWcucGhwJyk7CnJlcXVpcmVfb25jZSAoRU5HSU5FX0RJUiAuICcvbW9kdWxlcy9wb3pkcm8vbGFuZ3VhZ2UvYWRtaW4ubG5nJyk7CgovLyBaYXBpc3l3YW5pZSBwb2N6xIV0ZWsKaWYoICRhY3Rpb24gPT0gInNhdmUiICkgewoKCWlmKCAkX1JFUVVFU1RbJ3VzZXJfaGFzaCddID09ICIiIG9yICRfUkVRVUVTVFsndXNlcl9oYXNoJ10gIT0gJGRsZV9sb2dpbl9oYXNoICkgewoJCQoJCWRpZSggIkhhY2tpbmcgYXR0ZW1wdCEgVXNlciBub3QgZm91bmQiICk7CgkKCX0KCgkkZGItPnF1ZXJ5KCAiSU5TRVJUIElOVE8gIiAuIFVTRVJQUkVGSVggLiAiX2FkbWluX2xvZ3MgKG5hbWUsIGRhdGUsIGlwLCBhY3Rpb24sIGV4dHJhcykgdmFsdWVzICgnIi4kZGItPnNhZmVzcWwoJG1lbWJlcl9pZFsnbmFtZSddKS4iJywgJ3skX1RJTUV9JywgJ3skX0lQfScsICc3OCcsICcnKSIgKTsKCQkKCSRzYXZlX2NvbiA9ICRfUE9TVFsnc2F2ZV9jb24nXTsKCSRzYXZlX2Nvblsnb25saW5lXzEnXSA9IGludHZhbCgkc2F2ZV9jb25bJ29ubGluZV8xJ10pOwoKCSRmaW5kID0gYXJyYXkoKTsKCSRyZXBsYWNlID0gYXJyYXkoKTsKCQoJJGZpbmRbXSA9ICInXHInIjsKCSRyZXBsYWNlW10gPSAiIjsKCSRmaW5kW10gPSAiJ1xuJyI7CgkkcmVwbGFjZVtdID0gIiI7Cgkkc2F2ZV9jb25bJ3ZlcnNpb24nXSA9ICIzLjAiOwoJJHNhdmVfY29uID0gJHNhdmVfY29uICsgJHBvemRyb19jb25maWc7CgoJJGhhbmRsZXIgPSBmb3BlbiggRU5HSU5FX0RJUiAuICcvbW9kdWxlcy9wb3pkcm8vZGF0YS9wb3pkcm9fY29uZmlnLnBocCcsICJ3IiApOwoJCglmd3JpdGUoICRoYW5kbGVyLCAiPD9QSFAgXG5cbi8vS29uZmlndXJhY2phIE1vZHXFgnUgUG96ZHJvd2llxYQgXG5cblwkcG96ZHJvX2NvbmZpZyA9IGFycmF5IChcblxuIiApOwoJZm9yZWFjaCAoICRzYXZlX2NvbiBhcyAkbmFtZSA9PiAkdmFsdWUgKSB7CgkJCgkJJHZhbHVlID0gc3RyX3JlcGxhY2UoICIkIiwgIiYjMDM2OyIsICR2YWx1ZSApOwoJCSR2YWx1ZSA9IHN0cl9yZXBsYWNlKCAieyIsICImIzEyMzsiLCAkdmFsdWUgKTsKCQkkdmFsdWUgPSBzdHJfcmVwbGFjZSggIn0iLCAiJiMxMjU7IiwgJHZhbHVlICk7CgkJJHZhbHVlID0gc3RyX3JlcGxhY2UoIGNocigwKSwgIiIsICR2YWx1ZSApOwoJCSR2YWx1ZSA9IHN0cl9yZXBsYWNlKCBjaHIoOTIpLCAiIiwgJHZhbHVlICk7CgkJCgkJJG5hbWUgPSBzdHJfcmVwbGFjZSggIiQiLCAiJiMwMzY7IiwgJG5hbWUgKTsKCQkkbmFtZSA9IHN0cl9yZXBsYWNlKCAieyIsICImIzEyMzsiLCAkbmFtZSApOwoJCSRuYW1lID0gc3RyX3JlcGxhY2UoICJ9IiwgIiYjMTI1OyIsICRuYW1lICk7CgkJJG5hbWUgPSBzdHJfcmVwbGFjZSggY2hyKDApLCAiIiwgJG5hbWUgKTsKCQkkbmFtZSA9IHN0cl9yZXBsYWNlKCBjaHIoOTIpLCAiIiwgJG5hbWUgKTsKCQkkbmFtZSA9IHN0cl9yZXBsYWNlKCAnKCcsICIiLCAkbmFtZSApOwoJCSRuYW1lID0gc3RyX3JlcGxhY2UoICcpJywgIiIsICRuYW1lICk7CgkJCgkJZndyaXRlKCAkaGFuZGxlciwgIid7JG5hbWV9JyA9PiAneyR2YWx1ZX0nLFxuXG4iICk7CgkKCX0KCWZ3cml0ZSggJGhhbmRsZXIsICIpO1xuXG4/PiIgKTsKCWZjbG9zZSggJGhhbmRsZXIgKTsKCQoJY2xlYXJfY2FjaGUoKTsKCW1zZyggInN1Y2Nlc3MiLCAkbGFuZ1snb3B0X3N5c29rJ10sICRsYW5nWydvcHRfc3lzb2tfMSddLCAiJFBIUF9TRUxGP21vZD1wb3pkcm8iICk7Cn0KLy8gWmFwaXN5d2FuaWUgS29uaWVjCgppZigkX0dFVFsndXN1biddKXsKJGlkID0gaW50dmFsKCRfR0VUWyd1c3VuJ10pOwoKCiR1c24gPSAiRGVsZXRlIGZyb20gIi4gUFJFRklYIC4iX3BvemRybyB3aGVyZSBpZD0nJGlkJyI7CiRkYi0+cXVlcnkoJHVzbik7Cm1zZyAoImluZm8iLCAiVXN1bmnEmXRvIiwKICAgICAiVXN1bmnEmXRvIHRyZcWbxIcgcG96ZHJvd2llbmlhPGJyIC8+CiAgICAgIDxhIGhyZWY9XCJ7JFBIUF9TRUxGfT9tb2Q9cG96ZHJvXCI+eyRsYW5nWydkYl9wcmV2J119PC9hPiIpOwp9CgppZigkX0dFVFsnYWNjJ10pewokaWQgPSBpbnR2YWwoJF9HRVRbJ2FjYyddKTsKCiRzcWwgPSAnVVBEQVRFIGAnLiBQUkVGSVggLidfcG96ZHJvYCBTRVQgYGFwcHJvdmVgID0gXCcxXCcgV0hFUkUgYGlkYCA9ICcuJGlkLicgTElNSVQgMTsnOwoKJGRiLT5xdWVyeSgkc3FsKTsKbXNnICgiaW5mbyIsICJaYWFrY2VwdG93YW5vIiwKICAgICAiWmFha2NlcHRvd2FubyB0cmXFm8SHIHBvemRyb3dpZW5pYTxiciAvPgogICAgICA8YSBocmVmPVwieyRQSFBfU0VMRn0/bW9kPXBvemRyb1wiPnskbGFuZ1snZGJfcHJldiddfTwvYT4iKTsKfQoKCWVjaG9oZWFkZXIoICI8aSBjbGFzcz1cImZhIGZhLXVzZXJzIHBvc2l0aW9uLWxlZnRcIj48L2k+PHNwYW4gY2xhc3M9XCJ0ZXh0LXNlbWlib2xkXCI+TW9kdcWCIFBvemRyb3dpZcWEIDMuMCBieSBEal9BbGV4TiBHcmFwaGljPC9zcGFuPiIsICJVc3Rhd2llbmlhIE1vZHXFgnUgUG96ZHJvd2llxYQiICk7CgoJCglmdW5jdGlvbiBzaG93Um93cygkdGl0bGUgPSAiIiwgJGRlc2NyaXB0aW9uID0gIiIsICRmaWVsZCA9ICIiLCAkY2xhc3MgPSAiIikgewkJCQkKCQllY2hvICI8dHI+CiAgICAgICAgPHRkIGNsYXNzPVwiY29sLXhzLTYgY29sLXNtLTYgY29sLW1kLTEyXCI+PGg2IGNsYXNzPVwibWVkaWEtaGVhZGluZyB0ZXh0LXNlbWlib2xkXCI+eyR0aXRsZX08L2g2PjxzcGFuIGNsYXNzPVwidGV4dC1tdXRlZCB0ZXh0LXNpemUtc21hbGwgaGlkZGVuLXhzXCI+eyRkZXNjcmlwdGlvbn08L3NwYW4+PC90ZD4KICAgICAgICA8L3RyPiI7Cgl9CglmdW5jdGlvbiBzaG93Um93KCR0aXRsZSA9ICIiLCAkZGVzY3JpcHRpb24gPSAiIiwgJGZpZWxkID0gIiIsICRjbGFzcyA9ICIiKSB7CQkJCQoJCWVjaG8gIjx0cj4KICAgICAgICA8dGQgY2xhc3M9XCJjb2wteHMtNiBjb2wtc20tNiBjb2wtbWQtN1wiPjxoNiBjbGFzcz1cIm1lZGlhLWhlYWRpbmcgdGV4dC1zZW1pYm9sZFwiPnskdGl0bGV9PC9oNj48c3BhbiBjbGFzcz1cInRleHQtbXV0ZWQgdGV4dC1zaXplLXNtYWxsIGhpZGRlbi14c1wiPnskZGVzY3JpcHRpb259PC9zcGFuPjwvdGQ+CiAgICAgICAgPHRkIGNsYXNzPVwiY29sLXhzLTYgY29sLXNtLTYgY29sLW1kLTVcIj57JGZpZWxkfTwvdGQ+CiAgICAgICAgPC90cj4iOwoJfQkKCWZ1bmN0aW9uIG1ha2VEcm9wRG93bigkb3B0aW9ucywgJG5hbWUsICRzZWxlY3RlZCkgewoJCSRvdXRwdXQgPSAiPHNlbGVjdCBjbGFzcz1cInVuaWZvcm1cIiBuYW1lPVwiJG5hbWVcIj5cclxuIjsKCQlmb3JlYWNoICggJG9wdGlvbnMgYXMgJHZhbHVlID0+ICRkZXNjcmlwdGlvbiApIHsKCQkJJG91dHB1dCAuPSAiPG9wdGlvbiB2YWx1ZT1cIiR2YWx1ZVwiIjsKCQkJaWYoICRzZWxlY3RlZCA9PSAkdmFsdWUgKSB7CgkJCQkkb3V0cHV0IC49ICIgc2VsZWN0ZWQgIjsKCQkJfQoJCQkkb3V0cHV0IC49ICI+JGRlc2NyaXB0aW9uPC9vcHRpb24+XG4iOwoJCX0KCQkkb3V0cHV0IC49ICI8L3NlbGVjdD4iOwoJCXJldHVybiAkb3V0cHV0OwoJfQoKCQoJZWNobyA8PDxIVE1MCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KPCEtLQogICAgICAgIGZ1bmN0aW9uIENoYW5nZU9wdGlvbihvYmosIHNlbGVjdGVkT3B0aW9uKSB7CgkJCgkJCQkkKCIjbmF2YmFyLWZpbHRlciBsaSIpLnJlbW92ZUNsYXNzKCdhY3RpdmUnKTsKCQkJCSQob2JqKS5wYXJlbnQoKS5hZGRDbGFzcygnYWN0aXZlJyk7CiAgICAgICAgICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnaW5mbycpLnN0eWxlLmRpc3BsYXkgPSAibm9uZSI7CiAgICAgICAgICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndXNlcicpLnN0eWxlLmRpc3BsYXkgPSAibm9uZSI7CiAgICAgICAgICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY29uZmlnJykuc3R5bGUuZGlzcGxheSA9ICJub25lIjsKICAgICAgICAgICAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdsaWNlbmNlJykuc3R5bGUuZGlzcGxheSA9ICJub25lIjsKICAgICAgICAgICAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKHNlbGVjdGVkT3B0aW9uKS5zdHlsZS5kaXNwbGF5ID0gIiI7CgkJCQkKCQkJCXJldHVybiBmYWxzZTsKCiAgICAgICB9Ci8vLS0+Cjwvc2NyaXB0PgoKPHN0eWxlPgouYWxlcnQtZ3JlZW4ge2JhY2tncm91bmQtY29sb3I6ICNFMEY3RkE7Ym9yZGVyLWNvbG9yOiAjMDBENDQ2O30KLmFsZXJ0LXJlZCB7YmFja2dyb3VuZC1jb2xvcjogI0UwRjdGQTtib3JkZXItY29sb3I6ICNENDAwMDA7fQouYWxlcnQtb3JhbmdlIHtiYWNrZ3JvdW5kLWNvbG9yOiAjRTBGN0ZBO2JvcmRlci1jb2xvcjogI0Q0NEIwMDt9Ci5hbGVydC1vcmFuZ2UgYXtjb2xvcjojZjkwMDAwO2ZvbnQtd2VpZ2h0OiBib2xkO2ZvbnQtZmFtaWx5OiBCcmFkbGV5IEhhbmQsIGN1cnNpdmV9Ci5hY3Rpdntjb2xvcjojMGNhYTAyO30KLm5vLWFjdGl2e2NvbG9yOiNmMDA7fQoubmF2YmFyIHtwYWRkaW5nLWxlZnQ6IDBweCAhaW1wb3J0YW50O3BhZGRpbmctcmlnaHQ6IDBweCAhaW1wb3J0YW50O30KLm5hdmJhci1jb2xsYXBzZSB7bWFyZ2luLWxlZnQ6IDBweCAhaW1wb3J0YW50O30KCTwvc3R5bGU+Cgo8IS0tIFRvb2xiYXIgLS0+CjxkaXYgY2xhc3M9Im5hdmJhciBuYXZiYXItZGVmYXVsdCBuYXZiYXItY29tcG9uZW50IG5hdmJhci14cyBzeXN0ZW1zZXR0aW5ncyI+Cgk8dWwgY2xhc3M9Im5hdiBuYXZiYXItbmF2IHZpc2libGUteHMtYmxvY2siPgoJCTxsaSBjbGFzcz0iZnVsbC13aWR0aCB0ZXh0LWNlbnRlciI+PGEgZGF0YS10b2dnbGU9ImNvbGxhcHNlIiBkYXRhLXRhcmdldD0iI25hdmJhci1maWx0ZXIiPjxpIGNsYXNzPSJmYSBmYS1iYXJzIj48L2k+PC9hPjwvbGk+Cgk8L3VsPgoJPGRpdiBjbGFzcz0ibmF2YmFyLWNvbGxhcHNlIGNvbGxhcHNlIiBpZD0ibmF2YmFyLWZpbHRlciI+CgkJPHVsIGNsYXNzPSJuYXYgbmF2YmFyLW5hdiIgc3R5bGU9IndpZHRoOiAxMDAlOyI+CgkJCTxsaSBzdHlsZT0id2lkdGg6IDI1JTsgdGV4dC1hbGlnbjpjZW50ZXI7IiA+PGEgb25jbGljaz0iQ2hhbmdlT3B0aW9uKHRoaXMsICdpbmZvJyk7IiBjbGFzcz0idGlwIiA+PGltZyBzdHlsZT0nbWF4LWhlaWdodDogMzhweCcgc3JjPScvZW5naW5lL3NraW5zL2ltYWdlcy9wb3pkcm8vaWNvbl9pbmZvLnBuZycgYm9yZGVyPSIwIj48YnI+eyRsYW5nczFbJ2luZm8nXX08L2E+PC9saT4KCQkJPGxpIHN0eWxlPSJ3aWR0aDogMjUlOyB0ZXh0LWFsaWduOmNlbnRlcjsiIGNsYXNzPSJhY3RpdmUiPjxhIG9uY2xpY2s9IkNoYW5nZU9wdGlvbih0aGlzLCAndXNlcicpOyIgY2xhc3M9InRpcCIgPjxpbWcgc3R5bGU9J21heC1oZWlnaHQ6IDM4cHg7JyBzcmM9Jy9lbmdpbmUvc2tpbnMvaW1hZ2VzL3BvemRyby9pY29uX3VzZXIucG5nJyBib3JkZXI9IjAiPjxicj57JGxhbmdzMVsncG96ZHJvJ119PC9hPjwvbGk+CgkJCTxsaSBzdHlsZT0id2lkdGg6IDI1JTsgdGV4dC1hbGlnbjpjZW50ZXI7Ij48YSBvbmNsaWNrPSJDaGFuZ2VPcHRpb24odGhpcywgJ2NvbmZpZycpOyIgY2xhc3M9InRpcCIgPjxpbWcgc3R5bGU9J21heC1oZWlnaHQ6IDM4cHg7JyBzcmM9Jy9lbmdpbmUvc2tpbnMvaW1hZ2VzL3BvemRyby9pY29uX3NldHRpbmdzLnBuZycgYm9yZGVyPSIwIj48YnI+eyRsYW5nczFbJ3NldHRpbmdzJ119PC9hPjwvbGk+CgkJCTxsaSBzdHlsZT0id2lkdGg6IDI1JTsgdGV4dC1hbGlnbjpjZW50ZXI7Ij48YSBvbmNsaWNrPSJDaGFuZ2VPcHRpb24odGhpcywgJ2xpY2VuY2UnKTsiIGNsYXNzPSJ0aXAiID48aW1nIHN0eWxlPSdtYXgtaGVpZ2h0OiAzOHB4Oycgc3JjPScvZW5naW5lL3NraW5zL2ltYWdlcy9wb3pkcm8vbGljZW5jZS5wbmcnIGJvcmRlcj0iMCI+PGJyPnskbGFuZ3MxWydsaWNlbmNlJ119PC9hPjwvbGk+CgkJPC91bD4KCTwvZGl2Pgo8L2Rpdj4KPCEtLSAvdG9vbGJhciAtLT4KSFRNTDsKCQoJZWNobyA8PDxIVE1MCjxkaXYgaWQ9ImluZm8iICBzdHlsZT0nZGlzcGxheTpub25lJz4KICA8ZGl2IGNsYXNzPSJ0YWJsZS1yZXNwb25zaXZlIj4KICA8dGFibGUgY2xhc3M9InRhYmxlIHRhYmxlLXN0cmlwZWQiPgogICAgPHRyPgogICAgICAgIDx0ZCBjbGFzcz0iY29sLW1kLTMgd2hpdGUtbGluZSI+eyRsYW5nczFbJ2xpY2VuY2UnXX08L3RkPgogICAgICAgIDx0ZCBjbGFzcz0iY29sLW1kLTkgd2hpdGUtbGluZSI+PHNwYW4gc3R5bGU9J2NvbG9yOmdyZWVuJz48Yj5MaWNlbmNqYSBBa3R5d25hIC0gRGFybW93YTwvYj48L3NwYW4+PC90ZD4KICAgIDwvdHI+CiAgICA8dHI+CiAgICAgICAgPHRkPnskbGFuZ3MxWydpbmZvX2F1dGhvciddfTwvdGQ+CiAgICAgICAgPHRkPnskbGFuZ3MxWydpbmZvX2F1dGhvcjEnXX08L3RkPgogICAgPC90cj4KICAgIDx0cj4KICAgICAgICA8dGQ+eyRsYW5nczFbJ2luZm9fa29udCddfTwvdGQ+CiAgICAgICAgPHRkPnskbGFuZ3MxWydpbmZvX2tvbiddfTwvdGQ+CiAgICA8L3RyPgogICAgPHRyPgogICAgICAgIDx0ZD57JGxhbmdzMVsnaW5mb192ZXJzaW9uJ119PC90ZD4KICAgICAgICA8dGQ+eyRwb3pkcm9fY29uZmlnWyd2ZXJzaW9uJ119PC90ZD4KICAgIDwvdHI+Cgk8L3RhYmxlPjwvZGl2PjwvZGl2PgpIVE1MOwoJCgoJLy8gUG9jesSFdGVrIExpY2VuY2ppCgkKCWVjaG8gPDw8SFRNTAo8ZGl2IGlkPSJ1c2VyIiBjbGFzcz0icGFuZWwgcGFuZWwtZmxhdCI+CjxkaXYgY2xhc3M9InBhbmVsIHBhbmVsLWZsYXQiPgogIDxkaXYgY2xhc3M9InRhYmxlLXJlc3BvbnNpdmUiPgogIDx0YWJsZSBjbGFzcz0idGFibGUgdGFibGUtc3RyaXBlZCI+CkhUTUw7CgkKIyoqKioqKiBJbmZvcm1hY2plICoqKioqKiMKCiRxID0gIlNlbGVjdCAqIGZyb20gZGxlX3BvemRybyBvcmRlciBieSBkYXRlIERFU0MiOwoKJHJvdyA9ICRkYi0+c3VwZXJfcXVlcnkoJHEsdHJ1ZSk7Cgoka29keSA9ICI8dGFibGUgYWxpZ249J2NlbnRlcicgd2lkdGg9JzEwMCUnPjx0ciBoZWlnaHQ9JzMwJz4iLgogICAgICAgICAgICAgICAgICI8dGQgYWxpZ249J2NlbnRlcicgd2lkdGg9JzE2JSc+PGI+eyRsYW5nczFbJ2lkJ119PC9iPjwvdGQ+Ii4KCQkJCSAiPHRkIGFsaWduPSdjZW50ZXInIHdpZHRoPScxNiUnPjxiPnskbGFuZ3MxWyd1c2VyJ119PC9iPjwvdGQ+Ii4KCQkJCSAiPHRkIGFsaWduPSdjZW50ZXInIHdpZHRoPScxNiUnPjxiPnskbGFuZ3MxWydkYXRlJ119PC9iPjwvdGQ+Ii4KCQkJCSAiPHRkIGFsaWduPSdjZW50ZXInIHdpZHRoPSczMCUnPjxiPnskbGFuZ3MxWydjb250ZW50cyddfTwvYj48L3RkPiIuCgkJCQkgIjx0ZCBhbGlnbj0nY2VudGVyJyB3aWR0aD0nMTYlJz48Yj57JGxhbmdzMVsnc3RhdHVzJ119PC9iPjwvdGQ+Ii4KCQkJCSAiPHRkIGFsaWduPSdjZW50ZXInIHdpZHRoPScxNiUnPjxiPnskbGFuZ3MxWydkZWwnXX08L2I+PC90ZD4iLgoJCQkJIAoJCQkJIAoJCQkiPC90cj4iOwoJCQlmb3JlYWNoKCRyb3cgYXMgJGtvZCl7CgkJCQoJCQkkdXNlciA9ICRkYi0+Z2V0X2FycmF5KCRkYi0+cXVlcnkoIlNlbGVjdCAqIGZyb20gZGxlX3VzZXJzIHdoZXJlIHVzZXJfaWQ9J3ska29kWyd1c2VyaWQnXX0nIikpOwoJCQkKCQkJJGtvZHkuPSAiPHRyIGhlaWdodD0nMzAnPjx0ZCBhbGlnbj0nY2VudGVyJyB3aWR0aD0nMTYlJz4iLiRrb2RbJ2lkJ10uIjwvdGQ+Ii4KCQkJCSAiPHRkIGFsaWduPSdjZW50ZXInIHdpZHRoPScxNiUnPiIuJHVzZXJbJ25hbWUnXS4iPC90ZD4iLgoJCQkJICI8dGQgYWxpZ249J2NlbnRlcicgd2lkdGg9JzE2JSc+Ii4ka29kWydkYXRlJ10uIjwvdGQ+Ii4KCQkJCSAiPHRkIGFsaWduPSdjZW50ZXInIHdpZHRoPSczMCUnPiIuJGtvZFsncG96ZHJvJ10uIjwvdGQ+IjsKCQkJCSBpZigka29kWydhcHByb3ZlJ10gPT0gMCkKCQkJCSB7CgkJCQkka29keS49ICI8dGQgYWxpZ249J2NlbnRlcicgd2lkdGg9JzE2JSc+PGEgaHJlZj1cIj9tb2Q9cG96ZHJvJmFjYz17JGtvZFsnaWQnXX1cIiA+eyRsYW5nczFbJ2FjY2VwdCddfTwvYT48L3RkPiI7CgkJCQkgfWVsc2V7CgkJCQkgCgkJCQkka29keS49ICI8dGQgYWxpZ249J2NlbnRlcicgd2lkdGg9JzE2JScgPjxzcGFuIHN0eWxlPSdjb2xvcjpncmVlbjsnPnskbGFuZ3MxWydhY3RpdmUnXX08L3NwYW4+PC90ZD4iOwoJCQkJIH0KCQkJCQoJCQkJIAoJCQkJICRrb2R5Lj0iPHRkIGFsaWduPSdjZW50ZXInIHdpZHRoPScxNiUnPjxhIGhyZWY9XCI/bW9kPXBvemRybyZ1c3VuPXska29kWydpZCddfVwiID57JGxhbmdzMVsnZGVsJ119PC9hPjwvdGQ+Ii4KCQkJCSAiPC90cj4iOwoJCQkKCQkJCgkJCQoJCQl9Cgoka29keS49CQkiPC90YWJsZT4iOwkKZWNobyAka29keTsKCgkJZWNobyAiPC90YWJsZT48L2Rpdj48L2Rpdj4iOwoKCgllY2hvICI8L2Rpdj4iOwoKCQovLyBLb25pZWMgTGljZW5jamkKLy8gS29uZmlndXJhY2phIFBvY3rEhXRlawkKCWVjaG8gPDw8SFRNTAo8ZGl2IGlkPSJjb25maWciIHN0eWxlPSdkaXNwbGF5Om5vbmUnID4KPGZvcm0gYWN0aW9uPSIkUEhQX1NFTEY/bW9kPXBvemRybyZhY3Rpb249c2F2ZSIgbWV0aG9kPSJwb3N0IiBuYW1lPSJjb25mIiBpZD0iY29uZiIgY2xhc3M9InN5c3RlbXNldHRpbmdzIj4KPGRpdiBjbGFzcz0icGFuZWwgcGFuZWwtZmxhdCI+CiAgPGRpdiBjbGFzcz0idGFibGUtcmVzcG9uc2l2ZSI+CiAgPHRhYmxlIGNsYXNzPSJ0YWJsZSB0YWJsZS1zdHJpcGVkIj4KSFRNTDsKCXNob3dSb3coJGxhbmdzMVsnb25saW5lJ10sICRsYW5nczFbJ29ubGluZTEnXSwgbWFrZURyb3BEb3duKGFycmF5KCJ5ZXMiPT4iVGFrIiwibm8iPT4iTmllIiksICJzYXZlX2NvbltvbmxpbmVdIiwgInskcG96ZHJvX2NvbmZpZ1snb25saW5lJ119IiksICJ3aGl0ZS1saW5lIiApOwoJc2hvd1JvdygkbGFuZ3MxWyd0aXRsZSddLCAkbGFuZ3MxWyd0aXRsZTEnXSwiPGlucHV0IHR5cGU9dGV4dCBzdHlsZT1cInRleHQtYWxpZ246IGNlbnRlcjtcIiBjbGFzcz1cImZvcm0tY29udHJvbFwiIG5hbWU9XCJzYXZlX2Nvblt0aXRsZV1cIiB2YWx1ZT1cInskcG96ZHJvX2NvbmZpZ1sndGl0bGUnXX1cIiBzaXplPTQwPiIsICJ3aGl0ZS1saW5lIiApOwoJc2hvd1JvdygkbGFuZ3MxWydkZXNjJ10sICRsYW5nczFbJ2Rlc2MxJ10sIjx0ZXh0YXJlYSBjbGFzcz1cImNsYXNzaWNcIiBzdHlsZT1cIndpZHRoOjEwMCU7aGVpZ2h0OjEwMHB4O1wiIG5hbWU9XCJzYXZlX2NvbltkZXNjXVwiPnskcG96ZHJvX2NvbmZpZ1snZGVzYyddfTwvdGV4dGFyZWE+IiApOwoJc2hvd1JvdygkbGFuZ3MxWydsaW1pdCddLCAkbGFuZ3MxWydsaW1pdDEnXSwiPGlucHV0IHR5cGU9dGV4dCBzdHlsZT1cInRleHQtYWxpZ246IGNlbnRlcjtcIiBjbGFzcz1cImZvcm0tY29udHJvbFwiIG5hbWU9XCJzYXZlX2NvbltsaW1pdF9wb3pkcm9dXCIgdmFsdWU9XCJ7JHBvemRyb19jb25maWdbJ2xpbWl0X3BvemRybyddfVwiIHNpemU9MjA+IiwgIndoaXRlLWxpbmUiICk7CgoKCmVjaG8gPDw8SFRNTAo8L3RhYmxlPjwvZGl2PjwvZGl2PgpIVE1MOwoKCgkJZWNobyA8PDxIVE1MCjxkaXYgc3R5bGU9Im1hcmdpbi1ib3R0b206MzBweDsiPgogPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0idXNlcl9oYXNoIiB2YWx1ZT0ieyRkbGVfbG9naW5faGFzaH0iIC8+CjxidXR0b24gdHlwZT0ic3VibWl0IiBjbGFzcz0iYnRuIGJnLXRlYWwgYnRuLXJhaXNlZCBwb3NpdGlvbi1sZWZ0Ij48aSBjbGFzcz0iZmEgZmEtZmxvcHB5LW8gcG9zaXRpb24tbGVmdCI+PC9pPnskbGFuZ1sndXNlcl9zYXZlJ119PC9idXR0b24+CjwvZGl2Pgo8L2Zvcm0+CkhUTUw7CgllY2hvICI8L2Rpdj4iOwovL0tvbmZpZ3VyYWNqYSBLb25pZWMKLy8gTGljZW5jamEgUG9jesSFdGVrCQoJZWNobyA8PDxIVE1MCjxkaXYgaWQ9ImxpY2VuY2UiICBzdHlsZT0nZGlzcGxheTpub25lJz4KPGRpdiBjbGFzcz0icGFuZWwgcGFuZWwtZmxhdCI+CiAgPGRpdiBjbGFzcz0idGFibGUtcmVzcG9uc2l2ZSI+CiAgPHRhYmxlIGNsYXNzPSJ0YWJsZSB0YWJsZS1zdHJpcGVkIj4KSFRNTDsKCQoJc2hvd1Jvd3MoJGxhbmdzMVsnbGljZW5jZV9ydWxlcyddLCAkbGFuZ3MxWydsaWNlbmNlX3J1bGVzMSddKTsKCgplY2hvIDw8PEhUTUwKPC90YWJsZT48L2Rpdj48L2Rpdj4KSFRNTDsKCgllY2hvICI8L2Rpdj4iOwoJCi8vTGljZW5jamEgS29uaWVjCgoJCglpZighaXNfd3JpdGFibGUoRU5HSU5FX0RJUiAuICcvbW9kdWxlcy9wb3pkcm8vZGF0YS9wb3pkcm9fY29uZmlnLnBocCcpKSB7CgoJCWVjaG8gIjxkaXYgY2xhc3M9XCJhbGVydCBhbGVydC13YXJuaW5nIGFsZXJ0LXN0eWxlZC1sZWZ0IGFsZXJ0LWFycm93LWxlZnQgYWxlcnQtY29tcG9uZW50XCI+Ii5zdHJfcmVwbGFjZSgie2ZpbGV9IiwgIi9tb2R1bGVzL3BvemRyby9kYXRhL3BvemRyb19jb25maWcucGhwIiwgJGxhbmdbJ3N0YXRfc3lzdGVtJ10pLiI8L2Rpdj4iOwoKCX0KCQoKCQoJZWNob2Zvb3RlcigpOwoKCg=="));
?>