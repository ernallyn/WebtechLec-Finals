new Vue({
    el: '#app',
    data: {
        courseName: 'Vue.js Application Development',
		activeLecture: {title: ''},
        curriculum: {
            sections: [{
                    title: 'section 1',
                    lectures: [
                        { title: 'lecture 1', isFinished: true },
                        { title: 'lecture 2', isFinished: true },
                        { title: 'lecture 3', isFinished: false }
                    ]
                },
                {
                    title: 'section 2',
                    lectures: [
                        { title: 'lecture 4', isFinished: false },
                        { title: 'lecture 5', isFinished: false },
                        { title: 'lecture 6', isFinished: false }
                    ]
                }
            ]
        },
    },
    computed: {
      
    },
    methods: {
		lectures: function (sectionIndex) {
			return this.curriculum.sections[sectionIndex].lectures;
		},
		openLecture: function (sectionIndex, lectureIndex) {
			this.activeLecture = this.curriculum.sections[sectionIndex].lectures[lectureIndex];
		},
		completeLecture: function () {
			this.activeLecture.isFinished = !this.activeLecture.isFinished;
		}
    }
});