<?php
// Given a string s, check if it can be constructed by taking a substring of it and appending multiple copies of the substring together.



// Example 1:

$s = "abab";
// Output: true
// Explanation: It is the substring "ab" twice.
// Example 2:

$s = "aba";
// Output: false
// Example 3:

// $s = "abcabcabcabc";
// Output: true
// Explanation: It is the substring "abc" four times or the substring "abcabc" twice.


// Constraints:

// 1 <= s.length <= 104
// s consists of lowercase English letters.
class Solution
{

  /**
   * @param String $s
   * @return Boolean
   */
  function repeatedSubstringPattern($s)
  {

    $s_length = strlen($s);
    $s_half_length = floor($s_length / 2);
    if ($s_length === 1) return false;

    $sub_string = '';
    for ($i = 0; $i < $s_length; $i++) {

      if (($s_length - 1) === $i) {
        return false;
      }


      $sub_string .= $s[$i];
      $s_string_count = substr_count($s, $sub_string);
      if($s_half_length == ($i) && $s_string_count <= 1 ){
        return false;
      }

      if (($s_string_count * ($i + 1)) === $s_length) {
        return true;
      }
    }
    return false;
  }
}

// $s = "bb";
$s =
"xkmjusbyzqmvtevwpmthhrfzdazynvnxddhcxnjkjqdfrauwcjqwnqlysaflwpxlpmyswsiwrrzynpmrkzumclbactekxovxlarnvcnhoqqvuijwedthfdqbxamvtaoaralzaloqpgtwyfykvfvtrbqifxotohowqgilnimfxmgctxpiadtwozvwsmwwmqcglqxhifppssnrirwobfuppvdvyndcgkgymzmzdgsgvyvikgtfftachuzoiqpvtkmzbcdrbvxrwrzzrsjkaheeufwtsmunyczvyuktyoczcpugjncdatlzcdrkmstrzzqsagyhnckmozxizmmguqmsepnjahmtdjhayvdasyhyytxsyfxghaqeddbirmhofyxzbsusfgghuhfuryrixgibqnjdkiskurwvgnxczuyxrncjjemfalyupqsqncidzynjozzbrpdecmnmkalxtahrrrtaricvxnvzlkgbtrubbqfdxsotzdadqifxrjwxlbocksoxkzclqopxtanwdckutdardcmczjcgfrqtzsrejlaojqgbdudkpdbhpppmkbufzpecxkhupbrfsrueafwnlykjkimuimlivqiocximjfmqvbadbshzykftfajcgjrxwsfrxfniyvphfchxvvhzqwqhhuznwskduiffmmctaamdwlwtitsyremdxxxcuwupudozqbjqatqpjiznaaopcqdiacxbzcgtuajxskqmgernumigtkuaprciqdrpkjghjijkmrzdnnlkxlpuuzbdzwzpocncwizjmvvnbkofgndrewdkjinjgewxhgpfugdcyehsyeefgtuvgwvjrjtwadfwxvoihggelmyltnbnopjxojgsakopntiknhgzwkeafipguowkoxfydkprhmnjrmilnwwpnrtcjdtvgydliomxulcmfgjoppecsqbtdyhebxhuuatpufmgxomqooapksgoflsvsxmzwcaobegpwoclwtvirunfvsoeuwvgkjyyjhprechvpzpmodzywgzebagambtrunnzgphdpfsbasjftdlfrdjmqagjykhiqpmhntzmpyszrtqzablkvaojjczdfiwbhxhiettmcpkmsvqvcbrcfmksctxzmlcrmlqqaffsbnnykxbevzgzksbnvpenhiqhvnpqosgftbvqzyxkbbaubtmphfpqbzdbstksmoqfrarssmvkejtugdlgvfwdkmyygxivcvqefovxffeahhercrvnqwzbnhljyghfpdghwpsepnlgzyoguryfbjtdujwhuqgnnpltktivudedotackybqmjaqeyvltugstkbpfyyhpcvrumcoyjjubajdffbvkhgzxzjjnfvsxkpijgtuomyvsvofxvjieeydghwaecobeyanyviamvadugkynmyplglbytgprxyirlkyljfedpzxdpqwfqwoqqgvzpyngnhjivpxygylpbdzldgowtdfwhsntwhiqxgyeupgtwzeryyayyijoslpxdkdbcvnebssentbsbjyyisvzkcpgvvrfbvctakeqjoagpryiomvvyoelxwlmtzglgnwuugiaygkemtlfcfrlwedclfuzapfaygzoxsojomopavsenttulxwytlkathrbcffstlcqdtxvxopdpcynqrdxxkovfmggmrivmismrvfxxgpnmfwljaqvxswvddmhifxbglawvpvlwngdxdcjlzskcftyjgdftlrscydmkhuxumipwhayqmzgfkutvpmtrkiyfoujuvhuitfyqveotmcsogvqecsvmypbdmhixhkoxoxkchfasqqxnlpvywovrsmczddtehlhgohkxkrjqkxoiizktkdnvrafylmewszyjxcafpkuwlpumbtyduuosbrkwxcjtllcbabixjcrkjggscvathtpfvnkggmrmpggotxwldnutuumlluzydmjsdjxkhhleqgnscwmcomeumvxelzmeviilvhhpfvcpiglojvedlekxzkpfwfhsxkkdxaxejhsogdrmswsqzzknjmyofqyizhfzhsvvfjrgevckxohrzibmmfgkfkstyfxgpkzakrdpjmwfzqkgxqozsxuvlzebmfpopfftwmmtuceuenqkwqxccsucxefmxbsynvqpxbxsgkzzpyzzsfpyxprgjkqasqomtiecorwtzgbowpyeforenkynnlxvirkdqheqscagercihvhhfprlrghjgaewericdvstgozaoxzhvzsxjrvwcdxfsriczsqubkpzhdlxsuyyckwptrriyeniypjdjrongpquetrfvusnahwlvslrgdizvkfkatwbfrxkeyvlkrsrhqyjzjebaszrkypxqhotlyafvqjqegeorcmwqqotxtjiptxzfkvopzrxejevcaksnvbpjufdgdrcxmlwlieldommatbwpedhlvkpeaxoknsuksekjlfnzlbsgfjumqxngxoulmhvxtrkezgbqzatdoegqqxxctbnbbxcmpbvzzalzklsbhvxsyarjzakxjgbdrmtgwftjjxtorxdqsgljmarshuoejfrjamcpoxbmqyskdarjrprhevccfwintwsjjpjlecgylpurxfgpxodoppemciodpziunmdkeqyakzxpnkdsatdfaukoxiagdcrzdjjlfarxxhwxnfgsfrldtgcjjdhraewyaugwvgxarlbnhvcdpbngnorecvmcvadmzxmajenvenehpktnwcocazbzmwdbjctkoqlngoyjjdaqfzohniuxspobnlaqegyilziigrmmahjghxefrxgyxwzomwimxdihhuijfzpkojdzkmngstojffvnoqaqmllphycofjblnfezpegiepznfnuycsziulsbqyxhxqaronctcahbaapvfmbokiixkqwaiykbbeucshdvegrqdjtfimcieeegqjsecvfdgvdkjzliptflgumrjfldodtfqjpnpgvyfltbbgmncvhkiruncmpuaiyhucthfdjabmeqdeoaaooodpdwrtmixxwyeyjwnywrrncfvrdqflyscliwwnbzsztqwkcddmirkforoqsoyzfwwjuaolismetkualisnlvdmgffxmbqaocqwmdguwemtfyrqvdmbuccqqtynbadpapdkpogsomqfpdqqhfmgwcuvdlknnkhynkqajxrxlzdcabsiqvcykbvjhgdwxvmjkubcntwlilxvvakyrnjiuucwsuxvhlmbsaxuotjoitkmngxpkpldtnhrxjqrfsgqtxoxykftsyvqowucbyhatdujsqlinptxoyfkgygqhwzpsgaycmmmmlsecjmtsjpnbsuxxaaxxkxayfzhpiscijaxfhfaxjwouerzcvevikejsefzkxfglrgovnsbtuwihccceorwkcfuggaysbklgbyqtxqognibxclpukgfbuzuhkzzemuprtgcoesycpwjkpayewbwdmctsjivxmmpaghurgoxbefvniinyaqbhszxrhfvztnjcdgjocwoliscvwzbvpouhcfsjoqnybzszumkqarplgcsrqvbqbjnyhaojfzglmqsfuaytaaadfxxsopihvmbnchrkccpnowozrugvzzcpqqbvhcrmlazflovnixyumozssjcnpezmkfvuovprsrfpzckzdyktlarvioyhztpakmdqhqndydasgcvhjvwqamqrqmuswieajrzqmyigpvtkvhrbkwjdziarttbvhqwmgfnpuefsewkovrefecqtfqugicnxaghglhcpnxqfpjoskaigokiirpbtpdbzfrjzguojlpqphqpmamvrpzpwagqivzttjdltyftaslevbfwxouwjurkrbmezfqdznivfgqrliinhrvtncogqkzwcxchhhjmqgeuqrjezwmtrfztzbozpigtkfrbzzrbssejmbnxzxzqisviokofkvhvtjdcvixuzlieindmmhfrxtokmouzpmtpgdkffkoeelklkdjcnuyalyoxyyogjacsjfwlizsspeanicuwxtunplocqxmxfdofazbkaalqqhziuwjuzprhpqmfoqtnxnjsprtxsqidivvbtdfjmbjsvnhetvqjaelzrhdjpgitpimwmuqpwzfnynptjuxjadotnkonyhxbeyxbkshxmhmcjmjcnfwlhwcykrifanadtqctlhfegytcsxxmbivlygozrfrygaljniekeeuzmvbnjkwttevyywknwneuhxfwwrohchwcptpqkefougsirugnriazkwozhvaanjhyrpughqhorenqrgvmkksvqhjkripmkmjbsdtfsxqukivqdumyynogfxlxvhzfxdyijlvglvwmksjfqntiazwzjiygnactcrarhdqqqrgnkaorfswojmjfefjzdzossmjqprllsvlnoklknzukscsqvxbhqzlfbxowlvsqaflqexjfhlmlthouhsvfataineuujcbovldvoceljfpvgdyanxextucrcytyyjwcefdcblbozbvmdbiuyvdphymgsdpncnfhfmifhgpvvvddexeabhejnikxrabrdnfxfdcyfrvqxpxmywgmmjuduwutzemcmqbudnszaaarlqoahjbrrvdlwvxppcdzxrqmhznpcjkljxdyltcjlihcwxepiwfgdjvycoamcqkcmjqihlmilvcbnovrgfaqgbqcprrmhijyismbcgfkjzoawkupuillmikukfohfjrapsaecmfxvvcpsiosjbqpgtyztdxzvbzadxlprtvzzhldvyiamqkrjnybxxgnnbcilyijqmfcgjbtmeobfaxsquqjddhqpjzuziqjsyyrluipjszmrzqreoppytxzzvnbgiooijyyquokjtcedrastformrhqarhsauobahllbwcwqqqwohauasevptmxopqebibashpmheilaefqadjovcldbgdqtptragscaxnluujbjydfnqxjlvtdtflebmswhkmhylkyyaltijcuzgaclztrknfbqwpqujcpvnuulxlpjcblaertebbtkbrhkxxgqbctcmfcdsxakipjpyuuhumuvzqudhiataoehozmpelgpdujsnxejafhquzqtpznvkgibsnolvqozrnebtaatstjqjdiusynfwxbgfuqkzovhudbdywbazsdfizcyikeoxygadopyphttjkklxeslixmrrigplsbrrlzpfvtxiecqyecqajszhzsgeykcmrmwfnbjjwqevwclxdbwfuaotbjavkfktyaclteynccofcsgmqemkuwlsqwpjrbsgmjbddemafrevxdpkehbidbbugwsggqmbyeecpawsqsmdvxqocfziyamascxfmgzvmhqlnnjzgzxbnsvhgxuxmhsclpknaattrbaobcgaoprgkeedpbddjhtxhiuphhtwvqdzabvttnhhrzfjlylcsqdqsjwjqsqfqkbpbjgljuwuxoiqorksrrdpehjkqyqqiurhdnfeobkoclvpbmhnchcvovxbwsekmnvgmnywksuafvkbmbxnxkdputgauavkjfhoyymmmbkghkpwgrtzndmmbtqvgtykimatlanrhgfapgwgodfpnkvwtuesdmditncttytrdqsfymuzewhiomeeytwpdjrqqdiqikkwaxpbuxludlsgdvwqeyhcrvncdpghkjycsjxvaoykqtlwexdokkvvckaaxgtqglukictsorssexcibxiakuukoijzwpvltaetpzmxaxxzpnrxrutbnguslsyrrlzqfgrsrwbhpoxfvystlsatvzvhfbqhfplrrdcnhrwwjcfgeqgofejrxcpkiczogdmetofgqrbvihewrilzerxakjfewkngxwkanjxdpdfhotsmtvyelegiwkgseiqzeibkpxvaawefxylptniursxudupypyhvpyujfscgbzkmoyirlokrohdnqvzzvzjywyihsojciahptwnebwlzvabnbhuqtvilnhjgqewewkxtxiguvpbirbbqkugrjdnjjseptmsdghnvbmxpofgwtgdywkobcngiadyuwuccgdlgoscjvcryhhhpzchrhqwkeqgazszncxezxhbwttbzajnjgljdkhtwbdumzbvpfpgoszqkfeowoduxgypfgpcnhuzbsuhqweqpzniuwujlwotewtplzapsyjcbjivbnutuyovbwyqvasfdwqiihlbgypvqvifdmmmbzfpqrsjkzmqklieonctvsxcziyfiefnuqqhjxcdikwdoatdglhdderjkkmmctnykdndvqwhpxzbvyyikihrexwurhnnazdbxrgmjxaeukaeumtzyojfpehkupbmwxzzxlkzbpfgyflngzuuacsqldglucyuecstwgopmkirbuogctmzqhselchlwkgymxhhpkwcnazcmzrvbuagchgxlhcujkbwtcjxtvocmrdpjumaprmftriikbecuhftsdqjpamydefzadenxljfnchnnshhvsvaihfnanxtxiumjudpeheutvayrnoaclomdebhqbmedjfxxomsadzvjrfuhmgmszpfcahtzbibwdeqdxanqpkqzlqosoiljxkpzluhmogwkqhckccxwyqhxjslmpdcxcpnkixsqrqpyjrrmmlxrtkcqgsfwrajkfbrsomowhwzqadyulokduojcchszdojvkjscxdeljostagvelawosbgfzzzefnvlcgpmrhoiypyylduuknxqsjanuqeaguruhnvvwjhrhdsdmgrzgmwwhcrndluycdolmdltoccypwviunqqrhkoclrrdpjglhntrkamdltinbmdqvfvrcmakxtcjykzmtpbadvzywecjsdvcdhiveacfyszfekovgbxrdsjbkhbhyfgzncnzaizbflqnrtruuojaiboaktrecnfkdhiqrdcigojwczqqzqquklzmehwxquovvxpxrcqjfnflptdjeiroekdlrwsiuesqjuuxkiyskriiseqcrrxtfiotsijvpmdmupuhjzxityknwitlcklyffnjifcscbjfbdvieappjjfvwakughujjaimenqxyebofbzbqjndlustljadlkaptqaydyrtdffrvcvpbmzsntohttmktpsaiykaqktobpinlreqmiorhbooaiuavurejqcklbludcbayhctrndyfzkwutfioszteecnqtjwzisxcxbqhfuhbrgikbepbcxfibbxllqwsmtdveaighrpgnrkbilzindsjklsvlhpbvdcsfehijkayeemfublnshkwjxgmuklonzqegsdwtehxrfzlewlkiwtmihjmqppfsuaasfmwaybhuqilynllbftognjofdtbdexyezptiknhiorqcgpuzusftfjqrntsuidnukdqnjrombvuexuzszwwprzrlrkmezrfibklwmdfzacverytndsfrkwanqrimyhrxnghridxjvvbwmleylmtffmyfkddlfteacuahxdsvfuzjkreyzbuzazsdzrlpoavepgfwajvgdqitorzpchfvldcirdyiwjpqdknqtbocwqtrldypmlpxgzccilamhnselmnijphwighutnjgyjtcueqkivjrhwzgbjgqykclslpicsdbyamvbujfinwuiuheocuuprqtqszxferkwpapqlaeopoqxyggutokmuhmdnuapbajcdqdacaudlqbpzlnhlwikqdeuzojldccvovabqkeanwctmpptogudwglhodezelfsgsxjrqbbqxkdygcsgmhfvofxsufuprnhgsnhxzlpxzlxhilsymmwkdyemsiquznxhubgykbzgetxudbnauohsxyatqqaydxrrenarpzwqvtsctvgcrbnijpvclesyrqyfhxzqudaytyzdngvaqskylaqsspdfsbyxtpsuhtmkytlhcgppmmijggaervjitbtuiwmtkkcpilvuuypzbxwmgpzfdakvaysrfxokhdhrfxgoybusiavkaqijtotgtguisrhqcecggwrznfnajmgyiadmbanuldddgtakcrzbyhwinqdetefdiflesxnmhujywxhdyowzqrmgeuyskcdbhjyxngjrguoslcweswcgbxexlbtukuuvenrvsokkxjqydqlevrtpyvpyzqswgslopvmjckrhepptoafxcbsbymgwfstwqxxmuiceoayarlihhzlucykshjsgsysubxnwenittlkhjktemikzvbvvelxjehmqznmmnogjampvbfgdvkdjcbacgeigseiqbojbjfhoulgdgsgxbhdomevbgoxrqhthpbqndvxnlbguepepmlhptbxiyllbvbdqcpnqhpssojyufniezblbkbukzzpcearejpjrfzzkxjajmuorutnuejimlgybagywkoiibswdzejdwmqrvznufcylrsbdcafeeldoqowdeeheekyhopgfcqcveiuoabwrghfnwzbdorsxdkmlzeeikojefxcsisybsvgxkgooibuntrgshqifywdqsyjqzvrokoplfchlqegrlzwearppuurzmkejnyciyecovrsdsvpoytxveabxfruvpmbfivswsjtrhciiasusjbnwyvdvrguvyjogfvuluuvapnhqigxpnnrlwrbcmbvpmomzsqogpgjmvlsuawkkooacxxrpzpthctmzepjfbwtribegcjcccyevwvorzhgvvsfvqjozwrotpjsnqfbyrsvuuvtgjojrqkwrjmllpuseffwrpzypjdfcnhjtqdzrryjioaesnrykmfjopjmudndftcxfioqlocfocgkyabsqgskfxcvftfkznslbykijhpgekucvncctgtmcxocxgfyabiorqkdstdfervuqhqyviysrjqqdsoxfdlixtpxecpqewwewshaqrjjsczlirzrbdmkxfczydrtmxbjvnfpamcqfsyeslljrvvxpolnandnxawxjgauzebugikvpseyibzhhjyajdkrvzztoyuejskxeuoicmoovsnkwgfiaimppbqndbxrxecthkydpujfsjsffloryrxcpopyuudtlokknemyxcxlcspjfthtrgifqacjm";
var_dump((new Solution())->repeatedSubstringPattern($s));