describe('MonthDayService', function () {

    var MonthDayService;

    beforeEach(function() {
        module('angular-seed');
        inject(function(_MonthDayService_) {
            MonthDayService = _MonthDayService_;
        });
    });


    it('should exist', function() {
        expect(MonthDayService).not.toBeUndefined();
    });

    it('should get correct month from month day', function() {
        expect(MonthDayService.getMonth('--10-20')).toEqual(10);
    });

    it('should get correct day from month day', function() {
        expect(MonthDayService.getDay('--10-20')).toEqual(20);
    });

    it('should create correct month day string', function() {
        expect(MonthDayService.createMonthDayString(10, 20)).toEqual('--10-20');
    });

    it('should format month day string', function() {
        expect(MonthDayService.formatMonthDay('--10-20')).toEqual('20. 10.');
    });

    it('should get correct last occured date for month day', function() {
        var now = new Date(),
            nowYear = now.getFullYear(),
            nowMonth = now.getMonth() + 1,
            nowDate = now.getDate(),
            skipFirstDayOfMonth = nowDate === 1;

        if (!skipFirstDayOfMonth) {
            expect(MonthDayService.getLastOccuredDateForMonthDay('--' + nowMonth + '-' + (nowDate - 1)).getFullYear())
                .toEqual(nowYear);
        }

        expect(MonthDayService.getLastOccuredDateForMonthDay('--' + nowMonth + '-' + nowDate).getFullYear())
            .toEqual(nowYear - 1);
    });

});
