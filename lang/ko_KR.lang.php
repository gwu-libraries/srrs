<?php
/**
 * Korean (한국어) translation file.
 * @translator Jeon Wonseok
 */

global $strings;
global $email;
global $dates;
global $charset;
global $letters;
global $days_full;
global $days_abbr;
global $days_two;
global $days_letter;
global $months_full;
global $months_abbr;
global $days_letter;

$charset = 'utf-8';

$days_full = array('일요일', '월요일', '화요일', '수요일', '목요일', '금요일', '토요일');

$days_abbr = array('일요일', '월요일', '화요일', '수요일', '목요일', '금요일', '토요일');

$days_two = array('Su', 'Mo', 'Tu', '우리', '토륨', '프랑', 'Sa');

$days_letter = array('S', 'M', 'T', 'W', 'T', 'F', 'S');

$months_full = array('1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월');

$months_abbr = array('월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월');

$letters = array ('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

$dates['general_date'] = '%Y/%m/%d';

$dates['general_datetime'] = '%Y/%m/%d @';

$dates['res_check'] = '%A %Y/%m/%d';

$dates['schedule_daily'] = '%A<br/>%Y/%m/%d';

$dates['header'] = '%Y년 %m월 %d일，%A';

$dates['jumpbox'] = '%Y%m%d';

$strings['hours'] = '시';
$strings['minutes'] = '분';

$strings['mm'] = '월';

$strings['dd'] = '일';

$strings['yyyy'] = '년';
$strings['am'] = '오전';
$strings['pm'] = '오후';

$strings['Administrator'] = '관리자';
$strings['Welcome Back'] = '%s님, 환영합니다.';
$strings['Log Out'] = '로그아웃';
$strings['My Control Panel'] = '내 제어판';
$strings['Help'] = '도움말';
$strings['Manage Schedules'] = '위치 관리';
$strings['Manage Users'] = '사용자 관리';
$strings['Manage Resources'] = '회의실 관리';
$strings['Manage User Training'] = '사용자 교육 관리';
$strings['Manage Reservations'] = '예약 관리';
$strings['Email Users'] = '사용자에게 이메일 보내기';
$strings['Export Database Data'] = '데이타 내보내기';
$strings['Reset Password'] = '패스워드 초기화';
$strings['System Administration'] = '시스템 관리';
$strings['Successful update'] = '업데이트 완료';
$strings['Update failed!'] = '업데이트 실패하였습니다!';
$strings['Manage Blackout Times'] = '유휴시간 관리';
$strings['Forgot Password'] = '패스워드 분실';
$strings['Manage My Email Contacts'] = '내 이메일 관리';
$strings['Choose Date'] = '날짜 선택';
$strings['Modify My Profile'] = '내 프로필 수정';
$strings['Register'] = '등록';
$strings['Processing Blackout'] = '유휴시간 실행';
$strings['Processing Reservation'] = '예약 실행';
$strings['Online Scheduler [Read-only Mode]'] = '예약시스템 [읽기 전용]';
$strings['Online Scheduler'] = '예약시스템';
$strings['phpScheduleIt Statistics'] = 'phpScheduleIt 통계';
$strings['User Info'] = '사용자 정보:';

$strings['Could not determine tool'] = '공구를 결정할 수 없었습니다. 나중에 내 제어판 및 재시도에 돌아가기.';
$strings['This is only accessible to the administrator'] = '관리자만 접근 가능합니다';
$strings['Back to My Control Panel'] = '내 제어판으로 이동';
$strings['That schedule is not available.'] = '위치설정에 맞지않습니다.';
$strings['You did not select any schedules to delete.'] = '삭제하기 위한 위치를 선택하지 않았습니다.';
$strings['You did not select any members to delete.'] = '삭제하기 위한 구성원을 선택하지 않았습니다.';
$strings['You did not select any resources to delete.'] = '삭제하기 위한 회의실을 선택하지 않았습니다.';
$strings['Schedule title is required.'] = '위치 내용은 반드시 입력해야 합니다.';
$strings['Invalid start/end times'] = '올바르지 않은 시작/종료시각 입니다.';
$strings['View days is required'] = '검색날짜는 필수사항입니다';
$strings['Day offset is required'] = '일정분배는 필수사항입니다';
$strings['Admin email is required'] = '관리자 이메일은 필수사항입니다';
$strings['Resource name is required.'] = '회의실 이름은 필수사항입니다.';
$strings['Valid schedule must be selected'] = '유효한 위치를 선택해야 합니다';
$strings['Minimum reservation length must be less than or equal to maximum reservation length.'] = '예약기간은 최대 예약기간을 넘지 못합니다.';
$strings['Your request was processed successfully.'] = '요청내용은 업데이트 되었습니다.';
$strings['Go back to system administration'] = '시스템관리로 이동';
$strings['Or wait to be automatically redirected there.'] = '또는 변경화면으로 이동됩니다..';
$strings['There were problems processing your request.'] = '요청내용을 실행하는데 문제가 있습니다.';
$strings['Please go back and correct any errors.'] = '잘못된 정보 수정하기.';
$strings['Login to view details and place reservations'] = '로그인후 예약정보 보기';
$strings['Memberid is not available.'] = 'Memberid: %s는 잘못된 ID입니다..';

$strings['Schedule Title'] = '위치 내용';
$strings['Start Time'] = '시작시각';
$strings['End Time'] = '종료시각';
$strings['Time Span'] = '회의시간';
$strings['Weekday Start'] = '시작요일';
$strings['Admin Email'] = '관리자 이메일';

$strings['Default'] = '기본값';
$strings['Reset'] = '초기화';
$strings['Edit'] = '편집';
$strings['Delete'] = '삭제';
$strings['Cancel'] = '취소';
$strings['View'] = '보기';
$strings['Modify'] = '수정';
$strings['Save'] = '저장';
$strings['Back'] = '뒤로';
$strings['Next'] = '다음';
$strings['Close Window'] = '창닫기';
$strings['Search'] = '검색';
$strings['Clear'] = '지우기';

$strings['Days to Show'] = '일정보기';
$strings['Reservation Offset'] = '예약일정 나누기';
$strings['Hidden'] = '감추기';
$strings['Show Summary'] = '요약정보 보기';
$strings['Add Schedule'] = '위치 추가';
$strings['Edit Schedule'] = '위치 편집';
$strings['No'] = '아니오';
$strings['Yes'] = '네';
$strings['Name'] = '이름';
$strings['First Name'] = '한글이름';
$strings['Last Name'] = '영문이름';
$strings['Resource Name'] = '회의실명';
$strings['Email'] = '이메일';
$strings['Institution'] = '팀/부문';
$strings['Phone'] = '전화번호';
$strings['Password'] = '패스워드';
$strings['Permissions'] = '권한설정';
$strings['View information about'] = '요약 정보보기 %s %s';
$strings['Send email to'] = '이메일 보내기 %s %s';
$strings['Reset password for'] = '패스워드 초기화 %s %s';
$strings['Edit permissions for'] = '권한설정 편집 %s %s';
$strings['Position'] = '위치';
$strings['Password (6 char min)'] = '패스워드 (%s 최소 6자)';
$strings['Re-Enter Password'] = '패스워드 재확인';

$strings['Sort by descending last name'] = '성 오름차순 정렬';
$strings['Sort by descending email address'] = '이메일주소 내림차순 정렬';
$strings['Sort by descending institution'] = '팀/부문 내림차순 정렬';
$strings['Sort by ascending last name'] = '성 오름차순 정렬';
$strings['Sort by ascending email address'] = '이메일주소 오름차순 정렬';
$strings['Sort by ascending institution'] = '팀/부문 오름차순 정렬';
$strings['Sort by descending resource name'] = '회의실명 내림차순 정렬';
$strings['Sort by descending location'] = '위치 내림차순 정렬';
$strings['Sort by descending schedule title'] = '회의실내용 내림차순 정렬';
$strings['Sort by ascending resource name'] = '회의실명 오름차순 정렬';
$strings['Sort by ascending location'] = '위치 오름차순 정렬';
$strings['Sort by ascending schedule title'] = '회의실내용 오름차순 정렬';
$strings['Sort by descending date'] = '날짜 내림차순 정렬';
$strings['Sort by descending user name'] = '사용자명 내림차순 정렬';
$strings['Sort by descending start time'] = '시작시간 내림차순 정렬';
$strings['Sort by descending end time'] = '종료시간 내림차순 정렬';
$strings['Sort by ascending date'] = '날짜 오름차순 정렬';
$strings['Sort by ascending user name'] = '사용자명 오름차순 정렬';
$strings['Sort by ascending start time'] = '시작시간 오름차순 정렬';
$strings['Sort by ascending end time'] = '종료시간 오름차순 정렬';
$strings['Sort by descending created time'] = '최근 만든시간 내림차순 정렬';
$strings['Sort by ascending created time'] = '최근 만든시간 오름차순 정렬';
$strings['Sort by descending last modified time'] = '최종 수정시간 내림차순 정렬';
$strings['Sort by ascending last modified time'] = '최종 수정시간 오름차순 정렬';

$strings['Search Users'] = '사용자 찾기';
$strings['Location'] = '위치';
$strings['Schedule'] = '일정';
$strings['Phone'] = '전화번호';
$strings['Notes'] = '메모';
$strings['Status'] = '상태';
$strings['All Schedules'] = '모든 위치';
$strings['All Resources'] = '모든 회의실';
$strings['All Users'] = '모든 사용자';

$strings['Edit data for'] = '데이타 편집 %s';
$strings['Active'] = '활성화';
$strings['Inactive'] = '비활성화';
$strings['Toggle this resource active/inactive'] = '활성화/비활성화 버튼 넣기';
$strings['Minimum Reservation Time'] = '최소 예약 시간';
$strings['Maximum Reservation Time'] = '최대 예약 시간';
$strings['Auto-assign permission'] = '자동인증 권한';
$strings['Add Resource'] = '회의실 추가';
$strings['Edit Resource'] = '회의실 편집';
$strings['Allowed'] = '허용';
$strings['Notify user'] = '사용자 수정하기';
$strings['User Reservations'] = '사용자 예약';
$strings['Date'] = '일자';
$strings['User'] = '사용자';
$strings['Email Users'] = '사용자 이메일';
$strings['Subject'] = '제목';
$strings['Message'] = '메세지';
$strings['Please select users'] = '사용자 선택하기';
$strings['Send Email'] = '이메일 보내기';
$strings['problem sending email'] = '이메일 보내기에 실패 하였습니다. 다시 시도해 주십시오.';
$strings['The email sent successfully.'] = '정상완료 이메일 보내기.';
$strings['do not refresh page'] = '<u>do not</u>는 이 페이지를 새로고침 한 후 이메일은 다시 보내집니다.';
$strings['Return to email management'] = '이메일 관리로 돌아가기';
$strings['Please select which tables and fields to export'] = '선택한 항목과 목차 내보내기:';
$strings['all fields'] = '- 모든 항목 -';
$strings['HTML'] = 'HTML';
$strings['Plain text'] = '텍스트';
$strings['XML'] = 'XML';
$strings['CSV'] = 'CSV';
$strings['Export Data'] = '데이타 내보내기';
$strings['Reset Password for'] = '패스워드 초기화를 위한 %s';
$strings['Please edit your profile'] = '프로필을 수정해주세요';
$strings['Please register'] = '등록해주세요';
$strings['Keep me logged in'] = '자동 로그인<br>(쿠키 사용가능)';
$strings['Edit Profile'] = '프로필 수정';
$strings['Register'] = '등록';
$strings['Please Log In'] = '로그인 해주세요';
$strings['Email address'] = '이메일 주소';
$strings['Password'] = '패스워드';
$strings['First time user'] = '처음 사용하십니까?';
$strings['Click here to register'] = '등록하려면 여기를 클릭하세요';
$strings['Register for phpScheduleIt'] = 'phpScheduleIt 등록하기';
$strings['Log In'] = '로그인';
$strings['View Schedule'] = '위치보기';
$strings['View a read-only version of the schedule'] = '읽기전용 일정보기';
$strings['I Forgot My Password'] = '패스워드를 분실 하였습니다';
$strings['Retreive lost password'] = '새로운 패스워드가 맞지 않습니다';
$strings['Get online help'] = '온라인 도움말 보기';
$strings['Language'] = '언어';
$strings['(Default)'] = '(기본값)';

$strings['My Announcements'] = '공지사항';
$strings['My Reservations'] = '예약내용';
$strings['My Permissions'] = '권한내용';
$strings['My Quick Links'] = '빠른 연결';
$strings['Announcements as of'] = '현재 공지사항 %s';
$strings['There are no announcements.'] = '아무런 공지사항이 없습니다.';
$strings['Resource'] = '회의실';
$strings['Created'] = '만들기';
$strings['Last Modified'] = '마지막 수정';
$strings['View this reservation'] = '예약상태 보기';
$strings['Modify this reservation'] = '현재예약 수정';
$strings['Delete this reservation'] = '현재예약 삭제';
$strings['Bookings'] = '예약';
$strings['Change My Profile Information/Password'] = '나의프로필 변경';
$strings['Manage My Email Preferences'] = '이메일 혜택';
$strings['Mass Email Users'] = '대량 이메일 사용자';
$strings['Search Scheduled Resource Usage'] = '예약 찾기';
$strings['Show Resources'] = '회의실 보기';
$strings['Export Database Content'] = '내보내기 데이타베이스 내용';
$strings['View System Stats'] = '시스템상태 보기';
$strings['Email Administrator'] = '이메일 관리자';

$strings['Email me when'] = '이메일로 알림:';
$strings['I place a reservation'] = '나의예약 장소';
$strings['My reservation is modified'] = '나의예약 변경';
$strings['My reservation is deleted'] = '나의예약 삭제';
$strings['I prefer'] = '나는 좋아합니다:';
$strings['Your email preferences were successfully saved'] = '이메일 혜택이 정상적으로 저장되었습니다!';
$strings['Return to My Control Panel'] = '내 제어반으로 돌아가기';

$strings['Please select the starting and ending times'] = '시작/종료 시간을 선택하십시오:';
$strings['Please change the starting and ending times'] = '시작/종료 시간을 변경하십시오:';
$strings['Reserved time'] = '보류하는 시간:';
$strings['Minimum Reservation Length'] = '최소 예약일정:';
$strings['Maximum Reservation Length'] = '최대 예약일정:';
$strings['Reserved for'] = '를 위해 예약하는:';
$strings['Will be reserved for'] = '보류하기 위해:';
$strings['N/A'] = 'N/A';
$strings['Update all recurring records in group'] = '그룹에 있는 모든 내용/기록을 업데이트 하기?';
$strings['Delete?'] = '삭제하시겠습니까?';
$strings['Never'] = '--선택하지않음--';
$strings['Days'] = '일';
$strings['Weeks'] = '주';
$strings['Months (date)'] = '달 (일자)';
$strings['Months (day)'] = '달 (요일)';
$strings['First Days'] = '1일';
$strings['Second Days'] = '2일';
$strings['Third Days'] = '3일';
$strings['Fourth Days'] = '4일';
$strings['Last Days'] = '마지막 일';
$strings['Repeat every'] = '모두 반복하기:';
$strings['Repeat on'] = '위에 반복하기:';
$strings['Repeat until date'] = '일자까지 반복:';
$strings['Choose Date'] = '일자를 선택';
$strings['Summary'] = '요약';

$strings['View schedule'] = '위치 보기:';
$strings['My Reservations'] = '나의현재예약';
$strings['My Past Reservations'] = '나의과거예약';
$strings['Other Reservations'] = '나의다른예약';
$strings['Other Past Reservations'] = '나의다른과거예약';
$strings['Blacked Out Time'] = '유휴시간 정하기';
$strings['Set blackout times'] = '유휴시간 정하기 위에 %s %s';
$strings['Reserve on'] = '예약 %s 위에 %s';
$strings['Prev Month'] = '« 지난달';
$strings['Prev Week'] = '« 지난주';
$strings['Jump 1 week back'] = '1주일 전';
$strings['Prev days'] = '« 이전 %d 일';
$strings['Previous days'] = '« 이전 %d 일';
$strings['This Week'] = '이번 주';
$strings['Jump to this week'] = '지난주';
$strings['Next days'] = '다음 %d 일 »';
$strings['Next Week'] = '다음주 »';
$strings['Next Month'] = '다음달 »';
$strings['Jump To Date'] = '현재일자';
$strings['View Monthly Calendar'] = '한달 일정보기';
$strings['Open up a navigational calendar'] = '일정 검색';

$strings['View stats for schedule'] = '현재예약내용보기:';
$strings['At A Glance'] = '처음사용';
$strings['Total Users'] = '총 사용자:';
$strings['Total Resources'] = '총 회의실:';
$strings['Total Reservations'] = '총 예약:';
$strings['Max Reservation'] = '최대 예약:';
$strings['Min Reservation'] = '최소 예약:';
$strings['Avg Reservation'] = '평균 예약:';
$strings['Most Active Resource'] = '활성화된 모든 예약:';
$strings['Most Active User'] = '활성화된 모든 사용자:';
$strings['System Stats'] = '시스템 상태';
$strings['phpScheduleIt version'] = 'phpScheduleIt 버전:';
$strings['Database backend'] = '데이타베이스 끝부분:';
$strings['Database name'] = '데이타베이스명:';
$strings['PHP version'] = 'PHP 버전:';
$strings['Server OS'] = '서버 운영체제:';
$strings['Server name'] = '서버명:';
$strings['phpScheduleIt root directory'] = 'phpScheduleIt 루트 디렉토리:';
$strings['Using permissions'] = '권한 사용:';
$strings['Using logging'] = '기록 사용:';
$strings['Log file'] = '기록 파일:';
$strings['Admin email address'] = '관리자 이메일 주소:';
$strings['Tech email address'] = '기술관련 이메일 주소:';
$strings['CC email addresses'] = '참조 이메일 주소:';
$strings['Reservation start time'] = '예약 시작:';
$strings['Reservation end time'] = '예약 종료시각:';
$strings['Days shown at a time'] = '일정/시간 보이기:';
$strings['Reservations'] = '예약';
$strings['Return to top'] = '상위메뉴 돌아가기';
$strings['for'] = '를 위해';

$strings['Select Search Criteria'] = '선택한 기준으로 찾기';
$strings['Schedules'] = '위치:';
$strings['All Schedules'] = '모든위치';
$strings['Hold CTRL to select multiple'] = '여러가지선택 CTRL키';
$strings['Users'] = '참석자:';
$strings['All Users'] = '모든참석자';
$strings['Resources'] = '회의실';
$strings['All Resources'] = '모든 회의실';
$strings['Starting Date'] = '시작일자:';
$strings['Ending Date'] = '종료일자:';
$strings['Starting Time'] = '시작시간:';
$strings['Ending Time'] = '종료시간:';
$strings['Output Type'] = '표현형태:';
$strings['Manage'] = '관리';
$strings['Total Time'] = '총 시간';
$strings['Total hours'] = '총 시간:';
$strings['% of total resource time'] = '% 총 회의실 시간의';
$strings['View these results as'] = '결과를 다음과 같이 보기:';
$strings['Edit this reservation'] = '예약수정';
$strings['Search Results'] = '결과 찾기';
$strings['Search Resource Usage'] = '검색어 사용해서 찾기';
$strings['Search Results found'] = '검색 결과입니다.: %d 찾음 예약';
$strings['Try a different search'] = '다른 검색찾기';
$strings['Search Run On'] = '항목에서 찾기:';
$strings['Member ID'] = '사용자 ID';
$strings['Previous User'] = '« 이전 사용자';
$strings['Next User'] = '다음 사용자 »';

$strings['No results'] = '결과 없음';
$strings['That record could not be found.'] = '기록을 찾을수 없습니다..';
$strings['This blackout is not recurring.'] = '유휴시간이 정해지지 않았습니다.';
$strings['This reservation is not recurring.'] = '예약내용이 정해지지 않았습니다.';
$strings['There are no records in the table.'] = '에는 아무 기록도 없습니다 %s 테이블.';
$strings['You do not have any reservations scheduled.'] = '어떤 예약도 설정되지 않았습니다.';
$strings['You do not have permission to use any resources.'] = '어떤 권한도 설정되지 않았습니다.';
$strings['No resources in the database.'] = '데이타베이스에 있는 내용없음.';
$strings['There was an error executing your query'] = '요청 내용에 오류가 있습니다:';

$strings['That cookie seems to be invalid'] = '쿠키내용이 올바르지 않습니다';
$strings['We could not find that logon in our database.'] = 'ID를 찾을 수 없습니다.';
$strings['That password did not match the one in our database.'] = '패스워드가 일치하지 않습니다.';
$strings['You can try'] = '<br/>재시도 할 수 있습니다:<br/이메일 주소. <br/>Or를 >등록:<br/다시 >다시 로그인.';
$strings['A new user has been added'] = '새로운 사용자가 추가되었습니다';
$strings['You have successfully registered'] = '정상 등록되었습니다!';
$strings['Continue'] = '계속하기… ';
$strings['Your profile has been successfully updated!'] = '프로필 정상적으로 업데이트 되었습니다.!';
$strings['Please return to My Control Panel'] = '나의 제어반 가기.';
$strings['Valid email address is required.'] = '- 자주 사용되는 이메일 주소는 필수사항입니다.';
$strings['First name is required.'] = '- 한글이름은 필수사항입니다.';
$strings['Last name is required.'] = '- 영문이름은 필수사항입니다.';
$strings['Phone number is required.'] = '- 전화번호는 필수사항입니다.';
$strings['That email is taken already.'] = '- 해당 이메일은 다른 이메일 주소에 이미.<br/>등록되어 있습니다.';
$strings['Min 6 character password is required.'] = '- 최소6자 이상의 %s 패스워드는 필수사항입니다.';
$strings['Passwords do not match.'] = '- 패스워드가 맞지 않습니다.';

$strings['Per page'] = '페이지 별:';
$strings['Page'] = '페이지:';

$strings['Your reservation was successfully created'] = '예약이 정상적으로 생성되었습니다.';
$strings['Your reservation was successfully modified'] = '예약이 정상적으로 수정되었습니다';
$strings['Your reservation was successfully deleted'] = '예약이 정상적으로 삭제되었습니다';
$strings['Your blackout was successfully created'] = '유휴시간이 정상적으로 생성되었습니다';
$strings['Your blackout was successfully modified'] = '유휴시간이 정상적으로 변경되었습니다';
$strings['Your blackout was successfully deleted'] = '유휴시간이 정상적으로 삭제되었습니다';
$strings['for the follwing dates'] = '뒤에 오는 날짜를 위해:';
$strings['Start time must be less than end time'] = '시작시간은 종료시간 보다 작아야 합니다.';
$strings['Current start time is'] = '현재 시작은:';
$strings['Current end time is'] = '현재 종료시각은:';
$strings['Reservation length does not fall within this resource\'s allowed length.'] = '예약시간은 이 내용안에 포함되지 않습니다 \'s는 길이를 초과했습니다.';
$strings['Your reservation is'] = '예약은:';
$strings['Minimum reservation length'] = '최소 예약일자 :';
$strings['Maximum reservation length'] = '최대 예약일자:';
$strings['You do not have permission to use this resource.'] = '이용할수 있는 권한이 없습니다.';
$strings['reserved or unavailable'] = '%s에 %s는 보류하거나 이용할 수 없습니다.';
$strings['Reservation created for'] = '를 위해 생성되는 예약 %s';
$strings['Reservation modified for'] = '를 위해 수정되는 예약 %s';
$strings['Reservation deleted for'] = '를 위해 삭제되는 예약 %s';
$strings['created'] = '생성';
$strings['modified'] = '변경';
$strings['deleted'] = '삭제';
$strings['Reservation #'] = '예약 #';
$strings['Contact'] = '접촉';
$strings['Reservation created'] = '생성된 예약';
$strings['Reservation modified'] = '변경된 예약';
$strings['Reservation deleted'] = '삭제된 예약';

$strings['Reservations by month'] = '달까지 예약';
$strings['Reservations by day of the week'] = '요일까지 예약';
$strings['Reservations per month'] = '달별 예약';
$strings['Reservations per user'] = '사용자별 예약';
$strings['Reservations per resource'] = '회의실별 예약';
$strings['Reservations per start time'] = '시작시간별 예약';
$strings['Reservations per end time'] = '종료시간별 예약';
$strings['[All Reservations]'] = '[모든 예약]';

$strings['Permissions Updated'] = '업데이트 권한';
$strings['Your permissions have been updated'] = '%s 권한으로 업데이트 했습니다';
$strings['You now do not have permission to use any resources.'] = '현재 이용할 수 있는 권한이 없습니다.';
$strings['You now have permission to use the following resources'] = '현재이후 권한을 이용할 수 있습니다:';
$strings['Please contact with any questions.'] = '접촉 %질문에 s.';
$strings['Password Reset'] = '패스워드 초기화';

$strings['This will change your password to a new, randomly generated one.'] = '새로운 패스워드로 변경하거나 자동생성됩니다.';
$strings['your new password will be set'] = '새로운 패스워드를 누른후 "변경된 패스워드", 새 패스워드는 시스템에서 적용되며 사용자 이메일로 보내집니다.';
$strings['Change Password'] = '변경된 패스워드';
$strings['Sorry, we could not find that user in the database.'] = '죄송합니다. 사용자를 찾을수 없습니다.';
$strings['Your New Password'] = '새로운 %s 패스워드';
$strings['Your new passsword has been emailed to you.'] = '성공!<br/>'
. '새로운 패스워드는 사용자의.<br에/> 이메일로 보내졌습니다'
. '새로운 패스워드는 편지함을, 그 후에 <a href= 검사하기"index.php">Login</a>'
. '새로운 패스워드로 빠르게 &quot를 눌러서 변경하거나;내 프로파일 정보/Password&quot로 변경하기;'
. '내 제어반으로 연결하기.';

$strings['You are not logged in!'] = '로그인되지 않았습니다!';

$strings['Setup'] = '설정';
$strings['Please log into your database'] = '데이타베이스에 로그인';
$strings['Enter database root username'] = '데이타베이스 관리자 이름으로 들어가기:';
$strings['Enter database root password'] = '데이타베이스 관리자 패스워드 입력하기:';
$strings['Login to database'] = '데이타베이스에 로그인하기';
$strings['Root user is not required. Any database user who has permission to create tables is acceptable.'] = '관리자는 <b>not</요구된 b>입니다. 테이블을 생성하는 권한이 있는 데이타베이스 사용자를 수락합니다.';
$strings['This will set up all the necessary databases and tables for phpScheduleIt.'] = 'phpScheduleIt를 위한 모든 필요한 데이타베이스 그리고 테이블을 설치합니다.';
$strings['It also populates any required tables.'] = '필수 테이블은 사람을 등록합니다.';
$strings['Warning: THIS WILL ERASE ALL DATA IN PREVIOUS phpScheduleIt DATABASES!'] = '경고: phpScheduleIt 이전 데이타베이스에 있는 모든 데이타를 지웁니다!';
$strings['Not a valid database type in the config.php file.'] = 'config.php 파일에 있는 데이타베이스 유형이 아닙니다.';
$strings['Database user password is not set in the config.php file.'] = '데이타베이스 사용자 패스워드는 config.php 파일에 생성되지 않습니다.';
$strings['Database name not set in the config.php file.'] = 'config.php 파일에 생성되지 않는 데이타베이스명.';
$strings['Successfully connected as'] = '정상적으로 연결된 것과 같이';
$strings['Create tables'] = '테이블 &gt를 생성하기;';
$strings['There were errors during the install.'] = '설치도중 오류가 있습니다. 만약 오류가 minor.<br/><br/>이면 phpScheduleIt이 여전히 작동될 겁니다'
. '<a href=에 공개토론에 질문하기"http://sourceforge.net/forum/?group_id=95547">SourceForge</a>.';
$strings['You have successfully finished setting up phpScheduleIt and are ready to begin using it.'] = '정상적으로 phpScheduleIt을 설치한 후 정상적으로 사용할 준비가 되어 있습니다.';
$strings['Thank you for using phpScheduleIt'] = '모두 제거후 사용하기 \'설치하기 \' 전화번호부.'
. ' 데이터베이스 패스워드와 다른 모든 중요 정보를 포함하기 때문에 중요합니다.'
. ' 하지 못한 것은 이렇게 문을 데이타베이스로 틈에 누군가를 위해 제한 없는 떠납니다!'
. '<br/><br/>'
. 'phpScheduleIt를 사용을 감사드립니다!';
$strings['There is no way to undo this action'] = '활성화 상태로 변경할 방법이 없습니다!';
$strings['Click to proceed'] = '진행하기 위하여 누르기';
$strings['Please delete this file.'] = '파일을 삭제하십시오.';
$strings['Successful update'] = '정상적으로 갱신되었습니다.';
$strings['Patch completed successfully'] = '정상적으로 패치되었습니다.';

$strings['If no value is specified, the default password set in the config file will be used.'] = '아무런 지정이 없는경우, 설정 파일에 있는 기본 패스워드 설정으로 이용될 것입니다.';
$strings['Notify user that password has been changed?'] = '패스워드 변경 후 사용자에게 통보하기?';

$strings['This system requires that you have an email address.'] = '이메일 주소는 반드시 필요합니다.';
$strings['Invalid User Name/Password.'] = '사용자 명/패스워드가 올바르지 않습니다.';
$strings['Pending User Reservations'] = '사용자 예약까지';
$strings['Approve'] = '인증하기';
$strings['Approve this reservation'] = '현재 예약내용 인증하기';
$strings['Approve Reservations'] ='예약내용 인증하기';

$strings['Announcement'] = '공지사항';
$strings['Number'] = '번호';
$strings['Add Announcement'] = '공지사항 추가';
$strings['Edit Announcement'] = '공지사항 수정';
$strings['All Announcements'] = '모든 공지사항';
$strings['Delete Announcements'] = '공지사항 삭제';
$strings['Use start date/time?'] = '이용 시작 일자/시간?';
$strings['Use end date/time?'] = '이용 종료 일자/시간?';
$strings['Announcement text is required.'] = '공지사항 원본은 필수사항입니다.';
$strings['Announcement number is required.'] = '공지사항 번호는 필수사항입니다.';

$strings['Pending Approval'] = '승인보류';
$strings['My reservation is approved'] = '예약이 승인됩니다';
$strings['This reservation must be approved by the administrator.'] = '예약은 관리자에 의해 승인되어야 합니다.';
$strings['Approval Required'] = '요청되는 승인';
$strings['No reservations requiring approval'] = '승인을 요청하는 예약없음';
$strings['Your reservation was successfully approved'] = '예약은 정상적으로 승인되었습니다';
$strings['Reservation approved for'] = '예약을 위해 승인했습니다 %s';
$strings['approved'] = '승인되는';
$strings['Reservation approved'] = '예약을 승인했습니다';

$strings['Valid username is required'] = '실 사용자 이름은 필수사항입니다';
$strings['That logon name is taken already.'] = '로그온 이름이 이미 생성되었습니다.';
$strings['this will be your login'] = '(로그인 정보입니다)';
$strings['Logon name'] = '로그온 이름';
$strings['Your logon name is'] = '로그온 이름은 %s';

$strings['Start'] = '시작';
$strings['End'] = '종료';
$strings['Start date must be less than or equal to end date'] = '시작 일정은 작거나 같은 종료 일자이어야 합니다';
$strings['That starting date has already passed'] = '시작 일정는 이미 통과했다';
$strings['Basic'] = '기본';
$strings['Participants'] = '참가자';
$strings['Close'] = '마지막';
$strings['Start Date'] = '시작 일자';
$strings['End Date'] = '종료 일자';
$strings['Minimum'] = '최소';
$strings['Maximum'] = '최대';
$strings['Allow Multiple Day Reservations'] = '여러날 예약하기';
$strings['Invited Users'] = '초대된 사용자';
$strings['Invite Users'] = '사용자 초대하기';
$strings['Remove Participants'] = '참가자 삭제하기';
$strings['Reservation Invitation'] = '예약 안내장';
$strings['Manage Invites'] = '초대함 관리';
$strings['No invite was selected'] = '선택되었습니다 초대하기';
$strings['reservation accepted'] = '%s는 안내장을 받아들였습니다 %s';
$strings['reservation declined'] = '%s 안내장이 에 내림차순 위에 떨어졌습니다 %s';
$strings['Login to manage all of your invitiations'] = '모든 안내장의 관리를 위해 로그인하기';
$strings['Reservation Participation Change'] = '참가자 예약변경';
$strings['My Invitations'] = '내 안내장';
$strings['Accept'] = '수락';
$strings['Decline'] = '거절';
$strings['Accept or decline this reservation'] = '예약을 받아들이거나 거절하기';
$strings['My Reservation Participation'] = '내 예약 참가';
$strings['End Participation'] = '종료 참가';
$strings['Owner'] = '소유자';
$strings['Particpating Users'] = '참가 사용자';
$strings['No advanced options available'] = '활용할 수 있는 고급설정 없음';
$strings['Confirm reservation participation'] = '예약에 참가된 사용자 확인하기';
$strings['Confirm'] = '확인하기';
$strings['Do for all reservations in the group?'] = '에 있는 모든 예약을 분류합니다?';

$strings['My Calendar'] = '나의예약 일정보기';
$strings['View My Calendar'] = '나의예약 일정보기';
$strings['Participant'] = '참가자';
$strings['Recurring'] = '재발';
$strings['Multiple Day'] = '여러날';
$strings['[today]'] = '[오늘]';
$strings['Day View'] = '요일 보기';
$strings['Week View'] = '주 보기';
$strings['Month View'] = '달 보기';
$strings['Resource Calendar'] = '회의실 달력';
$strings['View Resource Calendar'] = '예약상태 일정보기';
$strings['Signup View'] = '승인 보기';

$strings['Select User'] = '사용자 선택하기';
$strings['Change'] = '변경';

$strings['Update'] = '갱신';
$strings['phpScheduleIt Update is only available for versions 1.0.0 or later'] = 'phpScheduleIt 갱신은 버전 1.0.0 또는 나중을 위해서만 유효합니다';
$strings['phpScheduleIt is already up to date'] = 'phpScheduleIt는 이미 최신 입니다';
$strings['Migrating reservations'] = '이동 예약';

$strings['Admin'] = '관리자';
$strings['Manage Announcements'] = '공지사항 관리';
$strings['There are no announcements'] = '아무런 공지사항이 없습니다';

$strings['Maximum Participant Capacity'] = '최대참석인원';
$strings['Leave blank for unlimited'] = '무제한을 위한 권한 공백';
$strings['Maximum of participants'] = '회의실 이용시  최대 수용량이 %s 참가자';
$strings['That reservation is at full capacity.'] = '예약은 가득차 있습니다.';
$strings['Allow registered users to join?'] = '등록 사용자가 합류하는 것을 허용하기?';
$strings['Allow non-registered users to join?'] = '비등록 사용자가 합류하는 것을 허용하기?';
$strings['Join'] = '합류하기';
$strings['My Participation Options'] = '내 참가 선택권';
$strings['Join Reservation'] = '예약 합류하기';
$strings['Join All Recurring'] = '다시 생성된 모두를 합류하기';
$strings['You are not participating on the following reservation dates because they are at full capacity.'] = '후에 생성된 예약 일자는 가득차 있기 때문에 참가하고 있지 않습니다.';
$strings['You are already invited to this reservation. Please follow participation instructions previously sent to your email.'] = '예약에 이미 초대되었습니다. 이메일로 보내진 참가자 지시 따르기.';
$strings['Additional Tools'] = '추가적인 공구';
$strings['Create User'] = '사용자 생성하기';
$strings['Check Availability'] = '가용성 검사하기';
$strings['Manage Additional Resources'] = '회의실 추가관리';
$strings['Number Available'] = '활성화 상태 나열하기';
$strings['Unlimited'] = '무제한';
$strings['Add Additional Resource'] = '회의실 추가';
$strings['Edit Additional Resource'] = '회의실 수정';
$strings['Checking'] = '검사';
$strings['You did not select anything to delete.'] = '삭제할 것을 아무것도 선택하지 않았습니다.';
$strings['Added Resources'] = '추가된 회의실';
$strings['Additional resource is reserved'] = '추가된 회의실 %s는 단지 유효한 %s 이번에';
$strings['All Groups'] = '모든 그룹';
$strings['Group Name'] = '그룹명';
$strings['Delete Groups'] = '삭제 그룹';
$strings['Manage Groups'] = '그룹 관리';
$strings['None'] = '아무것도';
$strings['Group name is required.'] = '그룹 이름은 필수사항입니다.';
$strings['Groups'] = '그룹';
$strings['Current Groups'] = '현재 그룹';
$strings['Group Administration'] = '그룹 관리';
$strings['Reminder Subject'] = '예약 제목 %s, %s %s';
$strings['Reminder'] = '제목';
$strings['before reservation'] = '예약 전';
$strings['My Participation'] = '나의현재 참가상태';
$strings['My Past Participation'] = '나의과거 참가상태';
$strings['Timezone'] = '시간대';
$strings['Export'] = '내보내기';
$strings['Select reservations to export'] = '내보내기를 위한 예약 선택하기';
$strings['Export Format'] = '내보내기 형식';
$strings['This resource cannot be reserved less than x hours in advance'] = '회의실은 보다는 더 적은이라고 비축될 수 미리 %s 시간';
$strings['This resource cannot be reserved more than x hours in advance'] = '회의실은 보다는 더 많은 것이라고 비축될 수 미리 %s 시간';
$strings['Minimum Booking Notice'] = '최소 신간 도서 안내';
$strings['Maximum Booking Notice'] = '최대 신간 도서 안내';
$strings['hours prior to the start time'] = '시작 이전의 시간';
$strings['hours from the current time'] = '현재 시간의 시간';
$strings['Contains'] = '포함합니다';
$strings['Begins with'] = '로 시작됩니다';
$strings['Minimum booking notice is required.'] = '최소 신간 도서의 안내는 필수사항입니다.';
$strings['Maximum booking notice is required.'] = '최대 신간 도서의 안내는 필수사항입니다.';
$strings['Accessory Name'] = '부속 이름';
$strings['Accessories'] = '부속품';
$strings['All Accessories'] = '모든 부속품';
$strings['Added Accessories'] = '추가된 부속품';

$email['register'] = "%s, %s \r\n"
		. "이후의 정보로 정상적으로 등록되었습니다:\r\n"
		. "로그온: %s \r\n"
		. "이름: %s %s \r\n"
		. "전화번호: %s \r\n"
		. "팀/부문: %s \r\n"
		. "위치: %s \r\n\r\n"
		. "이 위치에 일정잡이로 로그인:\r\n"
		. "%s \r\n\r\n"
		. "온라인 일정잡이에 연결후 찾아낸 뒤 내 제어반에서 프로필을 수정할 수 있습니다.\r\n\r\n"
		. "회의실 또는 예약에 근거한 질문에 대답하기 %s";

$email['register_admin'] = "관리자, \r\n\r\n"
		. "새로운 사용자는 등록이후 모든 내용은 정보에 등록했습니다:\r\n"
		. "이메일: %s \r\n"
		. "이름: %s %s \r\n"
		. "전화번호: %s \r\n"
		. "팀/부문: %s \r\n"
		. "위치: %s \r\n\r\n";

$email['reservation_activity_1'] = "%s,\r\n<br />"
		. "업데이트한 %s 예약 #%s. \r\n\r\n<br/><br/>"
		. "질문을 관리자에게 연락한 경우 이 예약 수 사용하기.\r\n\r\n<br/><br/>"
		. "사이 예약 %s %s %s %s 를 위한 %s"
		. " 에 위치하는 %s는 %s. \r\n\r\n<br/><br/>";
$email['reservation_activity_2'] = "이 예약은 이후에 오는 일자와 반복되었습니다:\r\n<br/>";
$email['reservation_activity_3'] = "이 그룹에 있는 모든 예약은 또한이 %s. \r\n\r\n<br/><br/>";
$email['reservation_activity_4'] = "이후에 오는 요약내용은 이 예약으로 제공되었습니다:\r\n<br/>%s \r\n\r\n<br/><br/>";
$email['reservation_activity_5'] = "만약에 이것이 틀린경우, 관리자에게에 연락하기: %s"
		. " 또는 요청하기 %s. \r\n\r\n<br/><br/>"
		. "예약 정보를에 내림차순으로 언제나 보거나 변경할 수 있습니다"
		. " 로 벌채 %s에:\r\n<br/>"
		. "<a href= \"%s \" target= \"_blank \">%s</a>.\r\n\r\n<br/><br/>";
$email['reservation_activity_6'] = "지시하기 <a href=에 모든 기술적인 문제를 \"mailto:%s \">%s</a>.\r\n\r\n<br/><br/>";

$email['reservation_activity_7'] = "%s,\r\n<br />"
		. "예약 #%s는 승인되었습니다.\r\n\r\n<br/><br/>"
		. "질문을 관리자에게 연락할 경우 이 예약 수를 사용하기.\r\n\r\n<br/><br/>"
		. "사이 예약 %s %s %s %s 를 위한 %s"
		. " 에 위치하는 %s는 이 %s. \r\n\r\n<br/><br/>";

$email['password_reset'] = "%s 패스워드는 관리자에 의해 다시 설정 되었습니다.\r\n\r\n"
		. "임시 패스워드는:\r\n\r\n %s \r\n\r\n"
		. "로 벌채하기 위하여 이 임시 패스워드를 (사본과 풀 확실히 정확합니다) 이용하기 %s에 %s"
		. " 그리고 즉시를 사용하여 그것을 바꾸기 '내 프로파일 정보/패스워드를 바꾸기' 내 빠른 연결 테이블에서 연결하기.\r\n\r\n"
		. "접촉 질문에 %s.";

$email['new_password'] = "%s,\r\n"
		. "위한 새 패스워드 %s 계정:\r\n\r\n"
		. "%s \r\n\r\n"
		. "로그인에 %s "
		. "새 패스워드로 "
		. "(사본은 그것을 지키기 위하여 풀칠하고 정확하다는 것을) "
		. "그리고 신속하게 눌러 자신의 패스워드로 바꾸기 "
		. "내 프로파일 정보/패스워드 바꾸기 "
		. "내 제어반으로 연결하기.\r\n\r\n"
		. "질문을 지시하기 %s.";

$email['reservation_invite'] = "%s는 이후에 오는 예약에 참가하도록 초대했습니다:\r\n\r\n"
		. "회의실: %s \r\n"
		. "시작 일자: %s \r\n"
		. "시작: %s \r\n"
		. "종료 일자: %s \r\n"
		. "종료시각: %s \r\n"
		. "요약: %s \r\n"
		. "반복된 일자 (if present): %s \r\n\r\n"
		. "만약에 강조되지 않으면 이 안내장을 받아들이기 위하여 이 연결 누르기 (사본과 풀) %s \r\n"
		. "만약에 강조되지 않으면 이 안내장을 거절하기 위하여 이 연결 누르기 (사본과 풀) %s \r\n"
		. "검색된 날짜를 받아들이거나 안내장을 나중에 관리하기 위하여, 로 벌채하기 %s에 %s";

$email['reservation_removal'] = "이후에 오는 예약에서 제거되었습니다:\r\n\r\n"
		. "회의실: %s \r\n"
		. "시작 일자: %s \r\n"
		. "시작: %s \r\n"
		. "종료 일자: %s \r\n"
		. "종료시각: %s \r\n"
		. "요약: %s \r\n"
		. "반복된 일자 (if present): %s \r\n\r\n";

$email['Reminder Body'] = "예약 를 위한 %s에서 %s %s에 %s %s는 접근하고 있습니다.";
		  ?>
