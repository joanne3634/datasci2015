var SpeakerConsole = {
    "Actived": new Array(),
    "Processing": false,
    "Elements": new Array(),
    "init": function(tag,cls) {
        this.Processing = true;
        var that = this;
        var big = document.getElementsByTagName(tag);
        for( var bigcount in big ) {
            var item = big[bigcount];
            if( !item.parentNode ) { continue; }

            var clss = ( item.className != null ) ? item.className.split(" ") : new Array();
            if( clss.indexOf(cls) < 0 ) { continue; }

            switch( item.parentNode.tagName.toLowerCase() ) {
            case 'li':
                item.temp = clss;
                this.Elements.push(item);

                var rh = item.offsetHeight;
                item.realHeight = Math.ceil(rh/24) * 24;
                item.show = function(hide_other) {
                    var oldpclss = this.parentNode.className.split(" ");
                    if( oldpclss.indexOf("anima") < 0 ) {
                        oldpclss.push("anima");
                        this.parentNode.className = oldpclss.join(" ");
                    }

                    if( hide_other ) {
                        while( SpeakerConsole.Actived.length > 0 ) { SpeakerConsole.Actived[0].hide(); }
                        var center = this;
                        setTimeout(function() { scrollTo(0,center.parentNode.offsetTop); },500);
                    }
                    this.className = this.temp.join(" ");
                    this.style.height = this.realHeight + "px";
                    SpeakerConsole.Actived.push(this);
                };
                item.hide = function(index) {
                    SpeakerConsole.Actived.splice(index,1);
                    this.className = this.temp.concat(["hidden"]).join(" ");
                    this.style.height = "24px";
                };

                item.setAttribute("onclick","this.click(event);");
                item.click = function(event) {
                    try {
                        var ev = window.event || event;
                        var trigger = ev.target || ev.srcElement;
                        var tagname = trigger.nodeName || trigger.tagName;
                        if( tagname.toUpperCase() == "A" ) { return; }
                    } catch(e) { console.log(e); }

                    var index = SpeakerConsole.Actived.indexOf(this);
                    if( index < 0 ) { this.show(true); } else { this.hide(index); }
                };
                break;
            case 'div':
                var timer = null;
                var pcls = item.parentNode.className;
                if( pcls = null || pcls.split(",").indexOf("speaker-in-speech") < 0 ) { break; }
                var rh = item.offsetHeight, append = 0;
                for(var i=0;i<item.childNodes.length;i++) {
                    var child = item.childNodes[i];
                    if( child.className == "speaker-title" ) { append++; }
                }
                item.realHeight = (Math.ceil(rh/24)+append) * 24;
                item.hide = function() { this.style.height = "24px"; };
                item.show = function() { this.style.height = this.realHeight + "px"; };
                var p = item;
                while( p != null ) {
                    if( p.tagName == "SECTION" ) {
                        if( !p.speakers ) {
                            p.lock = false;
                            p.speakers = new Array();
                            p.onmouseover = function() {
                                var that = this;
                                for(var i=0;i<that.speakers.length;i++) {
                                    var speaker = that.speakers[i];
                                    speaker.show();
                                }
                            };
                            p.onmouseout = function() {
                                for(var i=0;i<this.speakers.length;i++) {
                                    var speaker = this.speakers[i];
                                    speaker.hide();
                                }
                            };
                        }
                        p.speakers.push(item);
                        break;
                    }
                    p = p.parentNode;
                }
                break;
            default:
                break;
            }
            item.hide();
        }
        this.Processing = false;
        if( location.hash.length > 0 ) {
            SpeakerConsole.onHashChange();
        } else { this.showAll(); }
    },
    "showAll": function(tag) {
        var shows = new Array();
        for(var i=0;i<this.Elements.length;i++) {
            var speaker = this.Elements[i];
            if( speaker.taglist == null ) {
                var dataname = speaker.parentNode.getAttribute("data-name");
                speaker.taglist = ( dataname == null ) ? new Array() : dataname.split(",");
            }
            if( tag == null || speaker.taglist.indexOf(tag) >= 0 ) { shows.push(speaker); }
        }
        var hide_other = ( shows.length == 1 );
        while( shows.length > 0 ) {
            var speaker = shows.shift();
            speaker.show(hide_other);
        }
    },
    "hideAll": function() {
        for(var i=0;i<this.Elements.length;i++) {
            var speaker = this.Elements[i];
            speaker.hide();
        }
    },
    "onHashChange": function(hashtag) {
        this.Processing = true;
        if( hashtag == null ) { hashtag = location.hash.substring(1); }
        this.showAll(hashtag);
        this.Processing = false;
    }
};

$( document ).ready(function() {

SpeakerConsole.init("div","speaker-block");
window.onhashchange = function() {
    if( SpeakerConsole.Processing ) { return; }
    SpeakerConsole.onHashChange();
};

});