WebFont.load({
  google: {
    families: ['Noto Serif'],
    testStrings: {
      'Noto Serif': '\u2197\u2198'
    }
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