var sub;

var plac = document.getElementById("news_form");

sub = document.createElement("input");
sub.setAttribute("type","submit");
sub.setAttribute("name","submit");
sub.setAttribute("value","Insert");

console.log(sub);
console.log(plac);

plac.appendChild(sub);


