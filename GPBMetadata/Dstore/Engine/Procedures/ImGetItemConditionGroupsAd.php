<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetItemConditionGroups_Ad.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class ImGetItemConditionGroupsAd
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
            "0a84110a3b6473746f72652f656e67696e652f70726f636564757265732f" .
            "696d5f4765744974656d436f6e646974696f6e47726f7570735f41642e70" .
            "726f746f122a6473746f72652e656e67696e652e696d5f4765744974656d" .
            "436f6e646974696f6e47726f7570735f41641a136473746f72652f76616c" .
            "7565732e70726f746f1a1a6473746f72652f656e67696e652f656e67696e" .
            "652e70726f746f22d3040a0a506172616d657465727312370a12636f6e64" .
            "6974696f6e5f67726f75705f696418012001280b321b2e6473746f72652e" .
            "76616c7565732e496e746567657256616c756512200a17636f6e64697469" .
            "6f6e5f67726f75705f69645f6e756c6c18e9072001280812440a20636f6e" .
            "646974696f6e5f67726f75705f6465736372697074696f6e5f6c696b6518" .
            "022001280b321a2e6473746f72652e76616c7565732e537472696e675661" .
            "6c7565122e0a25636f6e646974696f6e5f67726f75705f64657363726970" .
            "74696f6e5f6c696b655f6e756c6c18ea072001280812400a1b6765745f75" .
            "6e757365645f636f6e646974696f6e5f67726f75707318032001280b321b" .
            "2e6473746f72652e76616c7565732e426f6f6c65616e56616c756512290a" .
            "206765745f756e757365645f636f6e646974696f6e5f67726f7570735f6e" .
            "756c6c18eb0720012808122d0a086f726465725f627918042001280b321b" .
            "2e6473746f72652e76616c7565732e496e746567657256616c756512160a" .
            "0d6f726465725f62795f6e756c6c18ec0720012808122e0a09726f775f63" .
            "6f756e7418052001280b321b2e6473746f72652e76616c7565732e496e74" .
            "6567657256616c756512170a0e726f775f636f756e745f6e756c6c18ed07" .
            "2001280812460a2166696c7465725f62795f636f6e645f706172745f6964" .
            "735f696e5f6f6e655f696418062001280b321b2e6473746f72652e76616c" .
            "7565732e426f6f6c65616e56616c7565122f0a2666696c7465725f62795f" .
            "636f6e645f706172745f6964735f696e5f6f6e655f69645f6e756c6c18ee" .
            "072001280822aa0a0a08526573706f6e736512380a106d6574615f696e66" .
            "6f726d6174696f6e18022003280b321e2e6473746f72652e656e67696e65" .
            "2e4d657461496e666f726d6174696f6e12270a076d657373616765180320" .
            "03280b32162e6473746f72652e656e67696e652e4d65737361676512450a" .
            "03726f7718042003280b32382e6473746f72652e656e67696e652e696d5f" .
            "4765744974656d436f6e646974696f6e47726f7570735f41642e52657370" .
            "6f6e73652e526f771af3080a03526f77120f0a06726f775f696418904e20" .
            "012805122e0a096f70657261746f723118914e2001280b321a2e6473746f" .
            "72652e76616c7565732e537472696e6756616c7565122f0a0a636f6e6469" .
            "74696f6e3118924e2001280b321a2e6473746f72652e76616c7565732e53" .
            "7472696e6756616c7565122f0a0a636f6e646974696f6e3218934e200128" .
            "0b321a2e6473746f72652e76616c7565732e537472696e6756616c756512" .
            "2e0a096f70657261746f723218944e2001280b321a2e6473746f72652e76" .
            "616c7565732e537472696e6756616c756512400a1b636f6e646974696f6e" .
            "5f67726f75705f6465736372697074696f6e18954e2001280b321a2e6473" .
            "746f72652e76616c7565732e537472696e6756616c756512470a21636f6d" .
            "62696e655f70617274735f776974685f615f6e5f645f6f70657261746f72" .
            "18964e2001280b321b2e6473746f72652e76616c7565732e426f6f6c6561" .
            "6e56616c7565123a0a147265637572736976655f6576616c756174696f6e" .
            "18974e2001280b321b2e6473746f72652e76616c7565732e496e74656765" .
            "7256616c756512370a11636f6e646974696f6e5f706172745f696418984e" .
            "2001280b321b2e6473746f72652e76616c7565732e496e74656765725661" .
            "6c756512390a14646f6d61696e5f747265655f6e6f64655f69647318994e" .
            "2001280b321a2e6473746f72652e76616c7565732e537472696e6756616c" .
            "7565123c0a166e6f64655f63686172616374657269737469635f6964189a" .
            "4e2001280b321b2e6473746f72652e76616c7565732e496e746567657256" .
            "616c756512400a18637265617465645f61745f646174655f616e645f7469" .
            "6d65189b4e2001280b321d2e6473746f72652e76616c7565732e54696d65" .
            "7374616d7056616c7565123f0a19757365645f696e5f616e5f6974656d5f" .
            "636f6e646974696f6e189c4e2001280b321b2e6473746f72652e76616c75" .
            "65732e426f6f6c65616e56616c756512470a21757365645f696e5f63616d" .
            "706169676e5f6974656d5f636f6e645f67726f757073189d4e2001280b32" .
            "1b2e6473746f72652e76616c7565732e426f6f6c65616e56616c7565122e" .
            "0a096c6576656c5f696473189e4e2001280b321a2e6473746f72652e7661" .
            "6c7565732e537472696e6756616c7565123f0a176564697465645f61745f" .
            "646174655f616e645f74696d65189f4e2001280b321d2e6473746f72652e" .
            "76616c7565732e54696d657374616d7056616c756512320a0c706172745f" .
            "736f72745f6e6f18a04e2001280b321b2e6473746f72652e76616c756573" .
            "2e496e746567657256616c7565123f0a1a636f6e646974696f6e5f706172" .
            "745f6465736372697074696f6e18a14e2001280b321a2e6473746f72652e" .
            "76616c7565732e537472696e6756616c756512330a0d696e68657269745f" .
            "646570746818a24e2001280b321b2e6473746f72652e76616c7565732e49" .
            "6e746567657256616c756512390a12636f6e646974696f6e5f67726f7570" .
            "5f696418a29c012001280b321b2e6473746f72652e76616c7565732e496e" .
            "746567657256616c7565425d0a1b696f2e6473746f72652e656e67696e65" .
            "2e70726f636564757265735a3e676f73646b2e6473746f72652e64652f65" .
            "6e67696e652f70726f636564757265732f696d5f4765744974656d436f6e" .
            "646974696f6e47726f7570735f4164620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

