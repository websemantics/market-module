module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    jshint: {
      options: {
        devel: true,
        curly: true,
        eqeqeq: true,
        immed: true,
        latedef: true,
        newcap: true,
        noarg: true,
        sub: true,
        undef: true,
        boss: true,
        eqnull: true,
        globals: {
          'window': true,
          'jQuery': true,
          'Fingerprint2': true,
          '$': true
        }
      },
      files: {
        src: ['./resources/js/trails.js']
      }
    },
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - <%= pkg.author.name %> - <%= grunt.template.today("yyyy-mm-dd") %> */',
        preserveComments: false
      },
      my_target: {
        files: {
          './resources/js/trails.min.js': [
          './resources/js/libraries/js-url/url.js',
          './resources/js/libraries/fingerprintjs2/fingerprint2.js',
          './resources/js/css-selector-generator/build/css-selector-generator.js',
          './resources/js/trails.js'
          ]
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.registerTask('default', ['jshint', 'uglify' ]);
};