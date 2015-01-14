module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      options: {
        // If you can't get source maps to work, run the following command in your terminal:
        // $ sass scss/foundation.scss:css/foundation.css --sourcemap
        // (see this link for details: http://thesassway.com/intermediate/using-source-maps-with-sass )
        sourceMap: true
      },

      dist: {
        options: {
          outputStyle: 'compressed'
        },
        files: {
          'css/foundation.css': 'scss/foundation.scss',
          'css/app.css': 'scss/app.scss'
        }
      }
    },

    copy: {
      scripts: {
        expand: true,
        cwd: 'bower_components/foundation/js/vendor/',
        src: '**',
        flatten: 'true',
        dest: 'js/vendor/'
      },

    },

    concat: {
        options: {
          separator: ';',
        },
        dist: {
          src: [

            'js/foundation.js',
            'js/custom/*.js'

          ],
          dest: 'js/app.js'
        }
      },

    uglify: {
      dist: {
        files: {
          // Shrink the file size by removing spaces
          'js/app.js': ['js/app.js']
        }
      }
    },

    watch: {
      grunt: { files: ['Gruntfile.js'] },

      sass: {
        files: 'scss/**/*.scss',
        tasks: ['sass']
      }
    }
  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.registerTask('build', ['sass', 'copy', 'concat', 'uglify']);
  grunt.registerTask('default', ['watch']);
};