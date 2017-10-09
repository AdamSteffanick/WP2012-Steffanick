WebFont.load({
  custom: {
    families: ["Noto Mono", "Noto Serif", "Noto Sans Symbols", "Geneva"]
  },
  loading: function () {
    console.log("loading");
  },
  fontloading: function (fontFamily, fontDescription) {
    console.log('fontloading: ' + fontFamily);
  },
  fontactive: function (fontFamily, fontDescription) {
    console.log('fontActive: ' + fontFamily);
  },
  fontinactive: function (fontFamily, fontDescription) {
    console.log('fontInActive: ' + fontFamily);
  }
});