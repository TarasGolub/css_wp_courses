/**
 * Created by taraska on 9/6/2016.
 */
function hideFoot(inp, foot) {
    inp = document.getElementById(inp);
    foot = document.getElementById(foot);
    if (inp.checked) foot.style.display = "none";
    else foot.style.display = "block";
}