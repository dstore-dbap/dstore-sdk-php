<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetOrders_Conditions_Ad.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class OmGetOrdersConditionsAd
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Dstore\Values::initOnce();
        \GPBMetadata\Dstore\Engine\Engine::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae92e0a396473746f72652f656e67696e652f70726f636564757265732f" .
            "6f6d5f4765744f72646572735f436f6e646974696f6e735f41642e70726f" .
            "746f12286473746f72652e656e67696e652e6f6d5f4765744f7264657273" .
            "5f436f6e646974696f6e735f41641a136473746f72652f76616c7565732e" .
            "70726f746f1a1a6473746f72652f656e67696e652f656e67696e652e7072" .
            "6f746f22eb160a0a506172616d657465727312340a0f6f726465725f6279" .
            "5f636f6c756d6e18012001280b321b2e6473746f72652e76616c7565732e" .
            "496e746567657256616c7565121d0a146f726465725f62795f636f6c756d" .
            "6e5f6e756c6c18e90720012808123d0a186372656174655f76616c69645f" .
            "6f726465725f696e666f7318022001280b321b2e6473746f72652e76616c" .
            "7565732e426f6f6c65616e56616c756512260a1d6372656174655f76616c" .
            "69645f6f726465725f696e666f735f6e756c6c18ea0720012808122e0a0a" .
            "62727574746f5f73756d18032001280b321a2e6473746f72652e76616c75" .
            "65732e537472696e6756616c756512180a0f62727574746f5f73756d5f6e" .
            "756c6c18eb072001280812300a0b63757272656e63795f69641804200128" .
            "0b321b2e6473746f72652e76616c7565732e496e746567657256616c7565" .
            "12190a1063757272656e63795f69645f6e756c6c18ec072001280812420a" .
            "1e7175616e746974795f666f725f6f6e655f6f726465725f636f6e74656e" .
            "7418052001280b321a2e6473746f72652e76616c7565732e537472696e67" .
            "56616c7565122c0a237175616e746974795f666f725f6f6e655f6f726465" .
            "725f636f6e74656e745f6e756c6c18ed0720012808122f0a0b636f6d6269" .
            "6e6174696f6e18062001280b321a2e6473746f72652e76616c7565732e53" .
            "7472696e6756616c756512190a10636f6d62696e6174696f6e5f6e756c6c" .
            "18ee072001280812300a0966726f6d5f6461746518072001280b321d2e64" .
            "73746f72652e76616c7565732e54696d657374616d7056616c756512170a" .
            "0e66726f6d5f646174655f6e756c6c18ef0720012808122e0a07746f5f64" .
            "61746518082001280b321d2e6473746f72652e76616c7565732e54696d65" .
            "7374616d7056616c756512150a0c746f5f646174655f6e756c6c18f00720" .
            "012808122f0a0a6f726465725f6465736318092001280b321b2e6473746f" .
            "72652e76616c7565732e426f6f6c65616e56616c756512180a0f6f726465" .
            "725f646573635f6e756c6c18f1072001280812390a14646174655f616e64" .
            "5f74696d655f666f726d6174180a2001280b321b2e6473746f72652e7661" .
            "6c7565732e496e746567657256616c756512220a19646174655f616e645f" .
            "74696d655f666f726d61745f6e756c6c18f2072001280812310a0c696e63" .
            "6c7564655f74696d65180b2001280b321b2e6473746f72652e76616c7565" .
            "732e426f6f6c65616e56616c7565121a0a11696e636c7564655f74696d65" .
            "5f6e756c6c18f3072001280812450a206765745f696e666f5f666f725f76" .
            "616c69645f6f726465725f636f6e74656e74180c2001280b321b2e647374" .
            "6f72652e76616c7565732e426f6f6c65616e56616c7565122e0a25676574" .
            "5f696e666f5f666f725f76616c69645f6f726465725f636f6e74656e745f" .
            "6e756c6c18f4072001280812340a106f726465725f73746174655f6c6973" .
            "74180d2001280b321a2e6473746f72652e76616c7565732e537472696e67" .
            "56616c7565121e0a156f726465725f73746174655f6c6973745f6e756c6c" .
            "18f5072001280812450a20736b69705f6f5f686176696e675f6469666665" .
            "72656e745f6f5f737461746573180e2001280b321b2e6473746f72652e76" .
            "616c7565732e426f6f6c65616e56616c7565122e0a25736b69705f6f5f68" .
            "6176696e675f646966666572656e745f6f5f7374617465735f6e756c6c18" .
            "f6072001280812380a147061796d656e745f747970655f69645f6c697374" .
            "180f2001280b321a2e6473746f72652e76616c7565732e537472696e6756" .
            "616c756512220a197061796d656e745f747970655f69645f6c6973745f6e" .
            "756c6c18f7072001280812390a157368697070696e675f747970655f6964" .
            "5f6c69737418102001280b321a2e6473746f72652e76616c7565732e5374" .
            "72696e6756616c756512230a1a7368697070696e675f747970655f69645f" .
            "6c6973745f6e756c6c18f8072001280812400a1b73686f775f706572736f" .
            "6e5f63686172616374657269737469637318112001280b321b2e6473746f" .
            "72652e76616c7565732e426f6f6c65616e56616c756512290a2073686f77" .
            "5f706572736f6e5f6368617261637465726973746963735f6e756c6c18f9" .
            "072001280812420a1d636f6e766572745f726573756c745f746f5f637572" .
            "72656e63795f696418122001280b321b2e6473746f72652e76616c756573" .
            "2e496e746567657256616c7565122b0a22636f6e766572745f726573756c" .
            "745f746f5f63757272656e63795f69645f6e756c6c18fa07200128081245" .
            "0a20636f6e766572745f726573756c745f746f5f676976656e5f63757272" .
            "656e637918132001280b321b2e6473746f72652e76616c7565732e426f6f" .
            "6c65616e56616c7565122e0a25636f6e766572745f726573756c745f746f" .
            "5f676976656e5f63757272656e63795f6e756c6c18fb072001280812330a" .
            "0e70757263686173655f6f7264657218142001280b321b2e6473746f7265" .
            "2e76616c7565732e426f6f6c65616e56616c7565121c0a13707572636861" .
            "73655f6f726465725f6e756c6c18fc072001280812420a1d696e7075745f" .
            "6e6573745f6c6576656c5f6f5f696e666f5f636f6e647318152001280b32" .
            "1b2e6473746f72652e76616c7565732e496e746567657256616c7565122b" .
            "0a22696e7075745f6e6573745f6c6576656c5f6f5f696e666f5f636f6e64" .
            "735f6e756c6c18fd072001280812400a1c76616c75655f73657061726174" .
            "6f725f695f6e5f6f70657261746f7218162001280b321a2e6473746f7265" .
            "2e76616c7565732e537472696e6756616c7565122a0a2176616c75655f73" .
            "6570617261746f725f695f6e5f6f70657261746f725f6e756c6c18fe0720" .
            "012808122b0a07636f756e74727918172001280b321a2e6473746f72652e" .
            "76616c7565732e537472696e6756616c756512150a0c636f756e7472795f" .
            "6e756c6c18ff072001280812300a0b6c616e67756167655f696418182001" .
            "280b321b2e6473746f72652e76616c7565732e496e746567657256616c75" .
            "6512190a106c616e67756167655f69645f6e756c6c188008200128081246" .
            "0a21696e7075745f6e6573745f6c6576656c5f6f5f636f6e5f696e666f5f" .
            "636f6e647318192001280b321b2e6473746f72652e76616c7565732e496e" .
            "746567657256616c7565122f0a26696e7075745f6e6573745f6c6576656c" .
            "5f6f5f636f6e5f696e666f5f636f6e64735f6e756c6c1881082001280812" .
            "490a24636f6e64735f6d7573745f62655f66756c66696c6c65645f666f72" .
            "5f6f5f636f6e5f6964181a2001280b321b2e6473746f72652e76616c7565" .
            "732e426f6f6c65616e56616c756512320a29636f6e64735f6d7573745f62" .
            "655f66756c66696c6c65645f666f725f6f5f636f6e5f69645f6e756c6c18" .
            "82082001280812410a1c66696c7465725f62795f6e6f64655f6964735f69" .
            "6e5f6f6e655f6964181b2001280b321b2e6473746f72652e76616c756573" .
            "2e496e746567657256616c7565122a0a2166696c7465725f62795f6e6f64" .
            "655f6964735f696e5f6f6e655f69645f6e756c6c1883082001280812350a" .
            "106765745f636f6d70757465645f73756d181c2001280b321b2e6473746f" .
            "72652e76616c7565732e426f6f6c65616e56616c7565121e0a156765745f" .
            "636f6d70757465645f73756d5f6e756c6c1884082001280812440a1f6f6e" .
            "6c795f76616c69645f706f735f666f725f636f6d70757465645f73756d18" .
            "1d2001280b321b2e6473746f72652e76616c7565732e426f6f6c65616e56" .
            "616c7565122d0a246f6e6c795f76616c69645f706f735f666f725f636f6d" .
            "70757465645f73756d5f6e756c6c1885082001280812440a206f72646572" .
            "5f73757263685f6964735f666f725f636f6d70757465645f73756d181e20" .
            "01280b321a2e6473746f72652e76616c7565732e537472696e6756616c75" .
            "65122e0a256f726465725f73757263685f6964735f666f725f636f6d7075" .
            "7465645f73756d5f6e756c6c1886082001280822fd150a08526573706f6e" .
            "736512380a106d6574615f696e666f726d6174696f6e18022003280b321e" .
            "2e6473746f72652e656e67696e652e4d657461496e666f726d6174696f6e" .
            "12270a076d65737361676518032003280b32162e6473746f72652e656e67" .
            "696e652e4d65737361676512430a03726f7718042003280b32362e647374" .
            "6f72652e656e67696e652e6f6d5f4765744f72646572735f436f6e646974" .
            "696f6e735f41642e526573706f6e73652e526f771ac8140a03526f77120f" .
            "0a06726f775f696418904e2001280512380a136f726465725f646174655f" .
            "616e645f74696d6518914e2001280b321a2e6473746f72652e76616c7565" .
            "732e537472696e6756616c756512320a0c7061796d656e745f636f737418" .
            "924e2001280b321b2e6473746f72652e76616c7565732e446563696d616c" .
            "56616c7565123b0a1664656c69766572795f646174655f616e645f74696d" .
            "6518934e2001280b321a2e6473746f72652e76616c7565732e537472696e" .
            "6756616c756512370a116e65745f7368697070696e675f636f737418944e" .
            "2001280b321b2e6473746f72652e76616c7565732e446563696d616c5661" .
            "6c7565122d0a086f726465725f6e6f18954e2001280b321a2e6473746f72" .
            "652e76616c7565732e537472696e6756616c7565122f0a096e6574746f5f" .
            "73756d18964e2001280b321b2e6473746f72652e76616c7565732e446563" .
            "696d616c56616c7565123c0a166c6173745f6564697465645f62795f7573" .
            "65725f696418974e2001280b321b2e6473746f72652e76616c7565732e49" .
            "6e746567657256616c7565122e0a086f726465725f696418984e2001280b" .
            "321b2e6473746f72652e76616c7565732e496e746567657256616c756512" .
            "300a0a62727574746f5f73756d18994e2001280b321b2e6473746f72652e" .
            "76616c7565732e446563696d616c56616c7565123f0a1970726563697365" .
            "5f6e65745f7368697070696e675f636f7374189a4e2001280b321b2e6473" .
            "746f72652e76616c7565732e446563696d616c56616c756512410a1c6368" .
            "617261635f76616c325f72657374725f62795f7061747465726e189b4e20" .
            "01280b321a2e6473746f72652e76616c7565732e537472696e6756616c75" .
            "65122d0a076e65745f73756d189c4e2001280b321b2e6473746f72652e76" .
            "616c7565732e446563696d616c56616c7565123b0a1576616c69645f636f" .
            "6e74656e745f6e65745f73756d189d4e2001280b321b2e6473746f72652e" .
            "76616c7565732e446563696d616c56616c756512430a1d70726563697365" .
            "5f76616c69645f636f6e74656e745f6e65745f73756d189e4e2001280b32" .
            "1b2e6473746f72652e76616c7565732e446563696d616c56616c7565122f" .
            "0a09706572736f6e5f6964189f4e2001280b321b2e6473746f72652e7661" .
            "6c7565732e496e746567657256616c7565123d0a187061796d656e745f74" .
            "7970655f6465736372697074696f6e18a04e2001280b321a2e6473746f72" .
            "652e76616c7565732e537472696e6756616c7565123e0a1876616c69645f" .
            "636f6e74656e745f62727574746f5f73756d18a14e2001280b321b2e6473" .
            "746f72652e76616c7565732e446563696d616c56616c756512350a0f7072" .
            "65636973655f6e65745f73756d18a24e2001280b321b2e6473746f72652e" .
            "76616c7565732e446563696d616c56616c756512340a0e706f736974696f" .
            "6e5f636f756e7418a34e2001280b321b2e6473746f72652e76616c756573" .
            "2e496e746567657256616c756512340a0e6f726465725f73746174655f69" .
            "6418a44e2001280b321b2e6473746f72652e76616c7565732e496e746567" .
            "657256616c756512360a107368697070696e675f747970655f696418a54e" .
            "2001280b321b2e6473746f72652e76616c7565732e496e74656765725661" .
            "6c756512340a0e706572736f6e5f747970655f696418a64e2001280b321b" .
            "2e6473746f72652e76616c7565732e496e746567657256616c756512400a" .
            "1a707265636973655f636f6d70757465645f67726f73735f73756d18a74e" .
            "2001280b321b2e6473746f72652e76616c7565732e446563696d616c5661" .
            "6c756512380a126861735f76616c69645f636f6e74656e747318a84e2001" .
            "280b321b2e6473746f72652e76616c7565732e426f6f6c65616e56616c75" .
            "6512360a106e65745f7061796d656e745f636f737418a94e2001280b321b" .
            "2e6473746f72652e76616c7565732e446563696d616c56616c756512380a" .
            "1264656c69766572795f706572736f6e5f696418aa4e2001280b321b2e64" .
            "73746f72652e76616c7565732e496e746567657256616c7565123e0a1973" .
            "68697070696e675f747970655f6465736372697074696f6e18ab4e200128" .
            "0b321a2e6473746f72652e76616c7565732e537472696e6756616c756512" .
            "2f0a0967726f73735f73756d18ac4e2001280b321b2e6473746f72652e76" .
            "616c7565732e446563696d616c56616c756512300a0b756e69745f73796d" .
            "626f6c18ad4e2001280b321a2e6473746f72652e76616c7565732e537472" .
            "696e6756616c7565123e0a18707265636973655f6e65745f7061796d656e" .
            "745f636f737418ae4e2001280b321b2e6473746f72652e76616c7565732e" .
            "446563696d616c56616c756512430a1e637573746f6d65725f6368617261" .
            "6374657269737469635f76616c75653218af4e2001280b321a2e6473746f" .
            "72652e76616c7565732e537472696e6756616c756512370a127075626c69" .
            "635f6465736372697074696f6e18b04e2001280b321a2e6473746f72652e" .
            "76616c7565732e537472696e6756616c756512310a0b63757272656e6379" .
            "5f696418b14e2001280b321b2e6473746f72652e76616c7565732e496e74" .
            "6567657256616c756512430a1e637573746f6d65725f6368617261637465" .
            "7269737469635f76616c75653118b24e2001280b321a2e6473746f72652e" .
            "76616c7565732e537472696e6756616c756512370a11707265636973655f" .
            "67726f73735f73756d18b34e2001280b321b2e6473746f72652e76616c75" .
            "65732e446563696d616c56616c756512380a12636f6d70757465645f6772" .
            "6f73735f73756d18b44e2001280b321b2e6473746f72652e76616c756573" .
            "2e446563696d616c56616c7565123d0a1776616c69645f636f6e74656e74" .
            "5f6e6574746f5f73756d18b54e2001280b321b2e6473746f72652e76616c" .
            "7565732e446563696d616c56616c756512330a0d7368697070696e675f63" .
            "6f737418b64e2001280b321b2e6473746f72652e76616c7565732e446563" .
            "696d616c56616c756512410a1c6368617261635f76616c315f7265737472" .
            "5f62795f7061747465726e18b74e2001280b321a2e6473746f72652e7661" .
            "6c7565732e537472696e6756616c756512350a0f7061796d656e745f7479" .
            "70655f696418b84e2001280b321b2e6473746f72652e76616c7565732e49" .
            "6e746567657256616c756512450a1f707265636973655f76616c69645f63" .
            "6f6e74656e745f67726f73735f73756d18b94e2001280b321b2e6473746f" .
            "72652e76616c7565732e446563696d616c56616c7565123e0a1870726563" .
            "6973655f636f6d70757465645f6e65745f73756d18ba4e2001280b321b2e" .
            "6473746f72652e76616c7565732e446563696d616c56616c756512300a0b" .
            "6f726465725f737461746518bb4e2001280b321a2e6473746f72652e7661" .
            "6c7565732e537472696e6756616c756512360a10636f6d70757465645f6e" .
            "65745f73756d18bc4e2001280b321b2e6473746f72652e76616c7565732e" .
            "446563696d616c56616c7565123d0a1776616c69645f636f6e74656e745f" .
            "67726f73735f73756d18bd4e2001280b321b2e6473746f72652e76616c75" .
            "65732e446563696d616c56616c7565425b0a1b696f2e6473746f72652e65" .
            "6e67696e652e70726f636564757265735a3c676f73646b2e6473746f7265" .
            "2e64652f656e67696e652f70726f636564757265732f6f6d5f4765744f72" .
            "646572735f436f6e646974696f6e735f4164620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

